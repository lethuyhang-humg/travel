<?php
$host = 'localhost'; // Địa chỉ máy chủ
$username = 'root';  // Tên người dùng (mặc định là 'root' trên XAMPP)
$password = '';      // Mật khẩu (mặc định là rỗng trên XAMPP)
$database = 'btlweb'; // Tên cơ sở dữ liệu của bạn

// Kết nối cơ sở dữ liệu
$connect = mysqli_connect($host, $username, $password, $database);

// Kiểm tra kết nối
if (!$connect) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
?>
