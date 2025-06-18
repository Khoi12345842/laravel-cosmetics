<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function parent(){
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }
    //một danh mục có thể có một danh mục cha
    public function children(){
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }
    //một danh mục có thể có nhiều danh mục con
}
