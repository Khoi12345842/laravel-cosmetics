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

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => \Storage::url($value),
        );
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)
                    ->withPivot('name', 'quantity', 'price');
    }

    public function favoritedBy()
    {
        return $this->belongsToMany(User::class, 'favorites', 'product_id', 'user_id');
    }
}
