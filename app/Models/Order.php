<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //một người dùng có thể có nhiều đơn hàng

    public function products()
    {
        return $this->belongsToMany(Product::class)
                    ->withPivot('id', 'name', 'quantity','price');
    }
    //một đơn hàng có thể có nhiều sản phẩm
}
