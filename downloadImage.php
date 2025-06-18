<?php

// Mảng chứa tên các hình ảnh và URL tương ứng
$images = [

    "logo-black.png" => "https://scontent.fhan17-1.fna.fbcdn.net/v/t39.30808-6/493107486_1837489776822044_573724372210311322_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeEroRxG3bIqBG5l72aPmGgf4H660Rd6NvzgfrrRF3o2_FA8Tt2vEdFU3AXEKxif5bZ-IbYvHz9dAuj-RD6nH-5P&_nc_ohc=7wS9a1yPptEQ7kNvwEpsZ5l&_nc_oc=AdmUbiM0vgB1npw9z6RH_eeDXSVemMx5W9bNHHgNywpwpBXLpLKhMwjRx1xdoK2s9KU&_nc_zt=23&_nc_ht=scontent.fhan17-1.fna&_nc_gid=2c0JXchtAgbyLaz12pMMiQ&oh=00_AfGp_wbJyMkGTUX7CtmBvUvWGc7YMDSQQDzlFzxCZiYPug&oe=681158CB",


   ];

// Đường dẫn đến thư mục bạn muốn lưu (Laravel: public/assets/frontend/img/home)
$imageFolder = 'assets/frontend/img/home';

// Đảm bảo rằng thư mục tồn tại, nếu chưa thì tạo
if (!file_exists($imageFolder)) {
    mkdir($imageFolder, 0777, true);  // Tạo thư mục với quyền ghi
}

// Duyệt qua mảng và tải từng hình ảnh
foreach ($images as $filename => $url) {
    $imageData = file_get_contents($url);  // Lấy dữ liệu từ URL

    if ($imageData) {
        file_put_contents($imageFolder . '/' . $filename, $imageData);
        echo "✅ Hình ảnh $filename đã được lưu vào thư mục $imageFolder!<br>";
    } else {
        echo "❌ Không thể tải hình ảnh từ URL: $url<br>";
    }
}
