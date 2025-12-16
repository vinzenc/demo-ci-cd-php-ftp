<?php
// CẤU HÌNH DATABASE - HỖ TRỢ 3 MÔI TRƯỜNG: DOCKER, LOCAL, LIVE

// 1. Kiểm tra xem có đang chạy trong Docker không?
// (Docker Compose sẽ truyền biến DB_HOST vào môi trường)
if (getenv('DB_HOST')) {
    $servername = getenv('DB_HOST'); // Thường là tên service: 'db'
    $username   = getenv('DB_USER');
    $password   = getenv('DB_PASS');
    $dbname     = getenv('DB_NAME');
} 
// 2. Nếu không phải Docker, kiểm tra xem có phải Localhost (XAMPP/WAMP) không?
elseif ($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == '127.0.0.1') {
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "demo"; // Tên database trên máy bạn
} 
// 3. Nếu không phải 2 trường hợp trên, mặc định là Live (InfinityFree)
else {
    $servername = "sql100.infinityfree.com";
    $username   = "if0_40697996";
    $password   = "XEa2giPoAn2K";
    $dbname     = "if0_40697996_demo";
}

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    // Ghi log lỗi thay vì hiện ra màn hình (tùy chọn bảo mật)
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Thiết lập bảng mã tiếng Việt
$conn->set_charset("utf8");

// echo "Kết nối thành công tới: " . $servername; 
?>