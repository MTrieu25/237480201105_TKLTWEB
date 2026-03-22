<!DOCTYPE html>
<html>
<head>
    <title>Bảng cửu chương</title>
    <style>
        .container {
            width: 100%;
            overflow: hidden;
        }
        .column {
            float: left;
            width: 18%;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<div class='column'>";
        for ($j = 1; $j <= 10; $j++) {
            $kq = $i * $j;
            echo "$i x " . str_pad($j, 2, " ", STR_PAD_LEFT) . " = " . str_pad($kq, 2, " ", STR_PAD_LEFT) . "<br>";
        }      
        echo "</div>";
        if ($i == 5) {
            echo "<br style='clear:both;'>";
        }
    }
    ?>
</div>
</body>
</html>