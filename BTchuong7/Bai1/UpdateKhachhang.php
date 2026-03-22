<?php
include 'Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $makh = $_POST['makh'];
    $tenkh = $_POST['tenkh'];
    $namsinh = $_POST['namsinh'];
    $dienthoai = $_POST['dienthoai'];
    $diachi = $_POST['diachi'];

    $sql = "UPDATE KHACHHANG 
            SET tenkh = '$tenkh', 
                namsinh = $namsinh, 
                dienthoai = '$dienthoai', 
                diachi = '$diachi' 
            WHERE makh = '$makh'";

    if (mysqli_query($conn, $sql)) {
        if (mysqli_affected_rows($conn) > 0) {
            echo "<script>alert('Cập nhật thông tin khách hàng $makh thành công!'); window.location.href='UpdateKhachhang.html';</script>";
        } else {
            echo "<script>alert('Không tìm thấy khách hàng có mã $makh để cập nhật!'); history.back();</script>";
        }
    } else {
        echo "Lỗi khi cập nhật: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>