<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    /**
     * The names of the attributes that should not be trimmed.
     *
     * @var array<int, string>
     */
    protected $except = [
        'current_password',
        'password',
        'password_confirmation',
    ];
}
// cắt khoảng trắng đầu cuối và cuối chuỗi trong các request
// ngoại trừ các trường mật khẩu, xác nhận mật khẩu và mật khẩu hiện tại