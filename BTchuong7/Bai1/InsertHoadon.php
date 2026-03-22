<?php
include 'Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mahd = $_POST['mahd'];
    $makh = $_POST['makh'];
    $mahang = $_POST['mahang'];
    $soluong = $_POST['soluong'];

    $query_gia = "SELECT gia FROM HANGHOA WHERE mahang = '$mahang'";
    $result = mysqli_query($conn, $query_gia);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $gia_ban = $row['gia'];
        
        $thanhtien = $soluong * $gia_ban;

        $sql = "INSERT INTO HOADON (mahd, makh, mahang, soluong, thanhtien) 
                VALUES ('$mahd', '$makh', '$mahang', $soluong, $thanhtien)";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Lập hóa đơn thành công! Thành tiền: $thanhtien'); window.location.href='InsertHoadon.html';</script>";
        } else {
            echo "Lỗi: " . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Lỗi: Mã hàng hóa không tồn tại!'); history.back();</script>";
    }

    mysqli_close($conn);
}
?>