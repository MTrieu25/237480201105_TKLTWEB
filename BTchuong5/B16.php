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
        <input type="text" name="chuoi_s" value=
            "<?php echo isset($_POST['chuoi_s']) ? $_POST['chuoi_s'] : ''; ?>" placeholder="Ví dụ: ABCD" required>
        <br><br>
        
        <button type="submit" name="dao_nguoc">Thực hiện đảo ngược</button>
    </form>

    <hr>

    <?php

    if (isset($_POST['dao_nguoc'])) {
        $s = $_POST['chuoi_s'];

        $chuoi_dao = strrev($s);

        echo "<b>Kết quả:</b><br>";
        echo "Chuỗi gốc: \"$s\" <br>";
        echo "Chuỗi sau khi đảo ngược: <b style='color: blue;'>\"$chuoi_dao\"</b>";
    }
    ?>
</body>
</html>