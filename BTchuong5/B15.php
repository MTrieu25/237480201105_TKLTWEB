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
        <input type="text" name="chuoi" value=
            "<?php echo isset($_POST['chuoi']) ? $_POST['chuoi'] : ''; ?>" required>
        <br><br>
        
        Nhập ký tự ch: <br>
        <input type="text" name="kytu" maxlength="1" value=
            "<?php echo isset($_POST['kytu']) ? $_POST['kytu'] : ''; ?>" required>
        <br><br>
        
        <button type="submit" name="submit">Kiểm tra</button>
    </form>

    <hr>

    <?php

    if (isset($_POST['submit'])) {
        $s = $_POST['chuoi'];
        $ch = $_POST['kytu'];

        $soLan = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            if ($s[$i] == $ch) {
                $soLan++;
            }
        }

        echo "<b>Kết quả:</b><br>";
        echo "Chuỗi: \"$s\" <br>";
        echo "Ký tự '$ch' xuất hiện: <b>$soLan</b> lần.";
    }
    ?>
</body>
</html>