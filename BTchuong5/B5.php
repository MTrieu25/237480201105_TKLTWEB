<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box { width: 350px; border: 2px solid #000; padding: 20px; border-radius: 15px; margin: 0 auto; background: #ffffff; }
        .title { text-align: center; font-weight: bold; margin-bottom: 15px; }
        .buttons { margin-top: 15px; text-align: center; }
        input[type="submit"] { padding: 5px 20px; cursor: pointer; }
    </style>
</head>
<body>
    <?php
$s1 = ""; $s2 = ""; $kq = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $s1 = $_POST['txtS1'];
    $s2 = $_POST['txtS2'];

    $a = abs($s1); 
    $b = abs($s2);

    if ($a == 0 || $b == 0) {
        $uscln = $a + $b;
    } else {

        while ($a != $b) {
            if ($a > $b) $a -= $b;
            else $b -= $a;
        }
        $uscln = $a;
    }


    if (isset($_POST['btnUSCLN'])) {
        $kq = $uscln;
    } elseif (isset($_POST['btnBSCNN'])) {
        if ($s1 == 0 || $s2 == 0) $kq = 0;
        else $kq = abs($s1 * $s2) / $uscln;
    }
}
?>

<div class="box">
    <div class="title">TÍNH USCLN VÀ BSCNN</div>
    <form method="POST">
        Số thứ 1: <input type="number" name="txtS1" value="<?php echo $s1; ?>" required><br><br>
        Số thứ 2: <input type="number" name="txtS2" value="<?php echo $s2; ?>" required><br><br>
        Kết quả: <input type="text" name="txtKQ" value="<?php echo $kq; ?>" readonly style="background: #eee;"><br>

        <div class="buttons">
            <input type="submit" name="btnUSCLN" value="USCLN">
            <input type="submit" name="btnBSCNN" value="BSCNN">
        </div>
    </form>
</div>
</body>
</html>