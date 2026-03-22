<?php
include 'Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $choice = $_POST['table_choice'];
    echo "<h2>DANH SÁCH " . ($choice == 'HANGHOA' ? "HÀNG HÓA" : ($choice == 'KHACHHANG' ? "KHÁCH HÀNG" : ($choice == 'NHASANXUAT' ? "NHÀ SẢN XUẤT" : "HÓA ĐƠN"))) . "</h2>";

    $sql = "SELECT * FROM $choice";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1' cellpadding='10' style='border-collapse: collapse; width: 80%;'>";

        echo "<tr style='background-color: #f2f2f2;'>";
        while ($field = mysqli_fetch_field($result)) {
            echo "<th>{$field->name}</th>";
        }
        echo "</tr>";


        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        if ($choice == 'HANGHOA') {

            $total_items = mysqli_num_rows($result);
            echo "<p style='margin-top: 20px; font-weight: bold;'>Danh sách gồm có $total_items mặt hàng, trong đó:</p>";

            $sql_stat = "SELECT nsx.tennsx, COUNT(hh.mahang) as sl 
                         FROM HANGHOA hh 
                         JOIN NHASANXUAT nsx ON hh.mansx = nsx.mansx 
                         GROUP BY hh.mansx";
            $stat_result = mysqli_query($conn, $sql_stat);
            
            echo "<ul>";
            while ($stat_row = mysqli_fetch_assoc($stat_result)) {
                echo "<li>Nhà sản xuất {$stat_row['tennsx']} có: {$stat_row['sl']}</li>";
            }
            echo "</ul>";
        }
    } else {
        echo "Không có dữ liệu trong bảng này.";
    }

    echo "<br><a href='List.html'>Quay lại</a>";
    mysqli_close($conn);
}
?>