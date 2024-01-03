<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Origin;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(){
        $categories = Category::where('parent_id', 0)->get();
        $brands = Brand::all();
        $origins = Origin::all();
        view()->share('categories', $categories);
        view()->share('brands', $brands);
        view()->share('origins', $origins);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {   
        $product_code = $request->input('product_code');

        $products = Product::when($product_code, function($query, $product_code){
                $query->where('product_code', $product_code);
            })
            ->orderByDesc('id')
            ->paginate(5);
        return view('admin.product.list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();
        DB::beginTransaction();
        try {
            $data['price'] = $data['initial_price'] - ($data['initial_price'] * $data['discount'] / 100);
            $data['image'] = $this->saveImage($data['image']);
            unset($data['initial_price']);
            $product = Product::create($data);
            DB::commit();
            return redirect()->route('product.show', $product);
        } catch (\Throwable $e) {
            DB::rollback();
            throw $e;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->validated();
        DB::beginTransaction();
        try {
            $data['price'] = $data['initial_price'] - ($data['initial_price'] * $data['discount'] / 100);
            if($request->file('image')){
             $data['image'] =  $this->saveImage($request->file('image'));
            }
            unset($data['initial_price']);
            $product->update($data);
            DB::commit();
            return redirect()->route('product.show', $product);
        } catch (\Throwable $e) {
            DB::rollback();
            throw $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back()->with('success', 'Xóa sản phẩm thành công!');
    }

    protected function saveImage($image){
        $imageName = $image->hashName();
        $res = $image->storeAs('products', $imageName, 'public');
        if($res){
            $path = 'products/'. $imageName;
        } 
        return $path;

    }
}
