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
        <input type="text" name="chuoi_s" style="width: 350px;" 
               value="<?php echo isset($_POST['chuoi_s']) ? $_POST['chuoi_s'] : ''; ?>" required>
        <br><br>
        <button type="submit" name="tim_tu">Tìm từ dài nhất</button>
    </form>

    <hr>

    <?php
    if (isset($_POST['tim_tu'])) {
        $s = trim($_POST['chuoi_s']);
        
        //Tách chuỗi thành mảng các từ
        $mang_tu = explode(" ", $s);
        
        $tu_dai_nhat = "";
        $chieu_dai_max = 0;

        foreach ($mang_tu as $tu) {
            // Loại bỏ khoảng trắng thừa nếu có
            $tu = trim($tu);
            if ($tu == "") continue;

            $chieu_dai_hien_tai = strlen($tu);

            if ($chieu_dai_hien_tai > $chieu_dai_max) {
                $chieu_dai_max = $chieu_dai_hien_tai;
                $tu_dai_nhat = $tu;
            }
        }

        echo "<b>Kết quả:</b><br>";
        echo "<span style='color: red;'>\"$tu_dai_nhat\"</span> $chieu_dai_max kí tự.";
    }
    ?>
</body>
</html>