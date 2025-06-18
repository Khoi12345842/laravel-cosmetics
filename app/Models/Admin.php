<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    //gán hàng loạt 
    protected $hidden = [
        'password',
        'remember_token',
    ];
    //ẩn các trường này 


    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    //chuyển đổi kiểu dữ liệu của các trường này

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    // mối quan hệ một admin có nhiều bài viết
}