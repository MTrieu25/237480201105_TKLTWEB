<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Họ và tên: <input type="text" name="txtHoTen"><br><br>
        Ngày sinh: <input type="text" name="txtNgaySinh"><br><br>
        Lớp: <input type="text" name="txtLop"><br><br>
        Điểm: <input type="text" name="txtDiem"><br><br>
        <input type="submit" name="btnHienThi" value="Hiển thị">
    </form>
    <hr>
    <?php
    if (isset($_POST['btnHienThi'])) {
        $hoten = $_POST['txtHoTen'];
        $ngaysinh = $_POST['txtNgaySinh'];
        $lop = $_POST['txtLop'];
        $diem = $_POST['txtDiem'];

        echo "<h3>Kết quả hiển thị:</h3>";
        echo "Họ và tên: " . $hoten . "<br>";
        echo "Ngày sinh: " . $ngaysinh . "<br>";
        echo "Lớp: " . $lop . "<br>";
        echo "Điểm: " . $diem;
    }
    ?>
</body>
</html>