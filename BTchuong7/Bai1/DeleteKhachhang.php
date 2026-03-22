<?php
include 'Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $makh = $_POST['makh'];

    $sql = "DELETE FROM KHACHHANG WHERE makh = '$makh'";

    if (mysqli_query($conn, $sql)) {
        if (mysqli_affected_rows($conn) > 0) {
            echo "<script>alert('Đã xóa khách hàng $makh thành công!'); window.location.href='DeleteKhachhang.html';</script>";
        } else {
            echo "<script>alert('Lỗi: Không tìm thấy mã khách hàng $makh trong hệ thống.'); history.back();</script>";
        }
    } else {
        // Trường hợp không xóa được do ràng buộc khóa ngoại (khách hàng đang có hóa đơn)
        echo "<script>alert('Không thể xóa khách hàng này vì họ đang có lịch sử mua hàng (hóa đơn)!'); history.back();</script>";
    }

    mysqli_close($conn);
}
?>