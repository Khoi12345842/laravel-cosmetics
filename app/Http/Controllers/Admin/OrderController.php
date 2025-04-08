<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->status;
        $id = $request->id;

        // Lấy danh sách đơn hàng, sắp xếp theo ID giảm dần
        $orders = Order::query()->orderByDesc('id');

        // Lọc theo trạng thái nếu có
        if (isset($status)) {
            $orders->where('status', $status);
        }

        // Lọc theo mã đơn hàng gần đúng nếu có
        if (!empty($id)) {
            $orders->where('id', 'LIKE', "%$id%");
        }

        // Phân trang
        $orders = $orders->paginate(10);

        return view('admin.order.list', compact('orders'));
    }

    public function show(Order $order)
    {
        return view('admin.order.show', compact('order'));
    }

    public function confirm(Order $order)
    {
        $order->status = 3;
        $order->save();

        return redirect()->back()->with('success', 'Đơn hàng đã được xác nhận.');
    }

    public function pendingOrders()
    {
        // Lấy danh sách đơn hàng chờ xác nhận, sắp xếp từ mới đến cũ
        $pendingOrders = Order::where('status', 2)->orderBy('created_at', 'desc')->get();
       // return response()->json($pendingOrders); // Trả về JSON nếu dùng AJAX
        return view('admin.layout.master', compact('pendingOrders'));
    }

}
