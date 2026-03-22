<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        Nhập chuỗi s: <br>
        <input type="text" name="chuoi_s" style="width: 300px;" 
               value="<?php echo isset($_POST['chuoi_s']) ? $_POST['chuoi_s'] : ''; ?>" 
               placeholder="Ví dụ: tôi ăn cơm" required>
        <br><br>
        <button type="submit" name="tach_tu">Tách từ</button>
    </form>

    <hr>

    <?php

    function tachTuTrongChuoi($chuoi) {
        // Sử dụng hàm explode để tách chuỗi dựa trên khoảng trắng " "
        return explode(" ", $chuoi);
    }

    if (isset($_POST['tach_tu'])) {
        $s = $_POST['chuoi_s'];
        $mang_tu = tachTuTrongChuoi($s);
        echo "<b>Kết quả tách chuỗi:</b><br>";
        
        foreach ($mang_tu as $index => $tu) {
            echo "a[" . ($index + 1) . "] = \"$tu\" <br>";
        }
    }
    ?>
</body>
</html>