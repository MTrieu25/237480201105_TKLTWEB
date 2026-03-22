<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "quanlybanhang";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
echo "Kết nối thành công!";
mysqli_set_charset($conn, "utf8");
?>