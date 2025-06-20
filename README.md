# 🛒 E-Commerce Laravel

Hệ thống bán hàng trực tuyến được xây dựng bằng Laravel 10, phát t

## 📋 Yêu cầu hệ thống
- Laravel Framework 10.48.28
- PHP 8.4.4
- Composer 2.8.6
- MySQL >= 8.0
- Git

## 🚀 Cài đặt

1. **Cài đặt dependencies**
```bash
composer install



4. **Cấu hình database trong .env**
```env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1 
DB_PORT=3306
DB_DATABASE=khoi44
DB_USERNAME=root
DB_PASSWORD=150404
// cần phải sửa lại khi chạy trên máy khác + chạy insert dữ liệu từ file database nằm ở file cosmetics.sql ( dưới file conposer.lock trong dự án )



2. **Tạo database và chạy migration**
```bash
php artisan migrate
php artisan db:seed
```



## 🏃‍♂️ Chạy dự án

```bash
php artisan serve
```

Truy cập: http://localhost:8000

**Tài khoản demo:**
- Admin: admin@yomail.com / password : 123456
- User: doanduckhoi@15042004 / password: doanduckhoi

## ✨ Tính năng chính

- 🛍️ Quản lý sản phẩm (CRUD)
- 🛒 Giỏ hàng và thanh toán
- 👥 Quản lý người dùng
- 📦 Quản lý đơn hàng
- 💳 Tích hợp thanh toán vnpay
- 📧 Gửi email xác nhận

