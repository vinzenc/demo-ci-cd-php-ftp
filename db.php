<?php
// Thông tin Database trên Hosting (PRODUCTION)
$host_live = "sql100.infinityfree.com"; // Thay bằng MySQL Host Name của bạn
$user_live = "if0_40697996";    // Thay bằng MySQL User Name
$pass_live = "XEa2giPoAn2K"; // Thay bằng Password
$name_live = "if0_40697996_demo"; // Thay bằng Database Name

// Thông tin Database trên Localhost (DEVELOPMENT) - Nếu bạn có cài XAMPP
$host_local = "localhost";
$user_local = "root";
$pass_local = "";
$name_local = "demo";

// Tự động nhận diện môi trường để chọn cấu hình đúng
// Nếu tên miền chứa "localhost" hoặc "127.0.0.1" thì dùng Local, ngược lại dùng Live
if ($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == '127.0.0.1') {
    $servername = $host_local;
    $username = $user_local;
    $password = $pass_local;
    $dbname = $name_local;
} else {
    $servername = $host_live;
    $username = $user_live;
    $password = $pass_live;
    $dbname = $name_live;
}

// Kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
// echo "Kết nối thành công!";
?>