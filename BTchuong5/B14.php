<?php
$matrix = [
    [1.1, 2.3, 3.1, 4.0, 5.0],
    [6.2, 7.7, 8.8, 9.5, 1.2],
    [4.6, 1.9, 3.6, 8.9, 1.5],
    [1.6, 1.7, 1.8, 1.9, 2.0]
];

function findMax($m) {
    $max = $m[0][0];
    foreach ($m as $row) {
        foreach ($row as $value) {
            if ($value > $max) $max = $value;
        }
    }
    return $max;
}

function findMin($m) {
    $min = $m[0][0];
    foreach ($m as $row) {
        foreach ($row as $value) {
            if ($value < $min) $min = $value;
        }
    }
    return $min;
}

function calculateSum($m) {
    $sum = 0;
    foreach ($m as $row) {
        foreach ($row as $value) {
            $sum += $value;
        }
    }
    return $sum;
}

function displayMatrix($m) {
    echo "<table border='1' cellpadding='10' style='border-collapse: collapse; text-align: center;'>";
    foreach ($m as $row) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . number_format($value, 1) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

echo "<h3>Kết quả xử lý ma trận:</h3>";
displayMatrix($matrix);

echo "<br><b>a) Số lớn nhất:</b> " . findMax($matrix);
echo "<br><b>b) Số nhỏ nhất:</b> " . findMin($matrix);
echo "<br><b>c) Tổng các số trong ma trận:</b> " . calculateSum($matrix);
?>