<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable implements CanResetPassword
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
    ];

    protected function avatar(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value != null ? \Storage::url($value) : null,
        );
    }
    // Lấy đường dẫn avatar người dùng

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
// ẩn mật khẩu và token
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    //chuyển đổi kiểu dữ liệu

    public function orders(){
        return $this->hasMany(order::class);
    }

    public function favoriteProducts()
    {
        return $this->belongsToMany(Product::class, 'favorites', 'user_id', 'product_id');
        // Nhiều người dùng có thể yêu thích nhiều sản phẩm
    }

    public function hasFavoritedProduct($productId)
    {
        return $this->favoriteProducts->contains($productId);
    }
    // Kiểm tra xem người dùng đã yêu thích sản phẩm hay chưa

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    // Người dùng có thể có nhiều đánh giá sản phẩm

}
