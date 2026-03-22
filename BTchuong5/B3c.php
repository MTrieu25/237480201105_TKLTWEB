<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "lấy ngẫu nhiên điều kiện x > y <br>";
    do {
        $x = rand(1, 10);
        $y = rand(1, 10);
    } while ($x <= $y);
    echo "Số ngẫu nhiên x: $x <br>";
    echo "Số ngẫu nhiên y: $y <br>";
    $tong = $x + $y;
    $hieu = $x - $y;
    $tich = $x * $y;
    $thuong = $x / $y;
    $du = $x % $y;
    echo "Tổng: $x + $y = $tong <br>";
    echo "Hiệu: $x - $y = $hieu <br>";
    echo "Tích: $x * $y = $tich <br>";
    echo "Thương: $x / $y = $thuong <br>";
    echo "Dư: $x % $y = $du <br>";
    ?>
</body>
</html>