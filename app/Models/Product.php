<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function origin()
    {
        return $this->belongsTo(Origin::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)
                    ->withPivot('id', 'name', 'quantity', 'price');
    }
    // một sản phẩm có thể có nhiều đơn hàng

    public function favoritedBy()
    {
        return $this->belongsToMany(User::class, 'favorites', 'product_id', 'user_id');
        //nhiều người dùng có thể yêu thích nhiều sản phẩm
    }

    public function firstImage()
    {
        return $this->images->first();
    }

    public function secondImage()
    {
        return $this->images->skip(1)->first();
    }
    // Trả về hình ảnh đầu tiên và thứ hai của sản phẩm


    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
