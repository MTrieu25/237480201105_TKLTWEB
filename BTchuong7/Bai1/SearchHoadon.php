<?php
include 'Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tenkh = $_POST['tenkh'];

    $sql = "SELECT kh.tenkh, hd.mahd, hh.tenhang, hd.soluong, hd.thanhtien 
            FROM KHACHHANG kh
            INNER JOIN HOADON hd ON kh.makh = hd.makh
            INNER JOIN HANGHOA hh ON hd.mahang = hh.mahang
            WHERE kh.tenkh LIKE '%$tenkh%'";

    $result = mysqli_query($conn, $sql);

    echo "<h2>Kết quả tìm kiếm cho: '$tenkh'</h2>";

    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1' cellpadding='10' style='border-collapse: collapse; width: 100%; text-align: left;'>
                <tr style='background-color: #eee;'>
                    <th>Tên khách hàng</th>
                    <th>Mã HĐ</th>
                    <th>Tên hàng</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr>";
        
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['tenkh']}</td>
                    <td>{$row['mahd']}</td>
                    <td>{$row['tenhang']}</td>
                    <td>{$row['soluong']}</td>
                    <td>" . number_format($row['thanhtien']) . " VNĐ</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Không tìm thấy dữ liệu mua hàng cho khách hàng này.</p>";
    }
    
    echo "<br><a href='SearchHoadon.html'>Quay lại tìm kiếm</a>";
    mysqli_close($conn);
}
?>