<?php
$arr = [1,2,3,4,5,6,7,8,9];

//a. Xuất mảng
foreach($arr as $x){
    echo "$x ";
}
echo "<br>";

//c. Đếm số chẵn
$count = 0;
foreach($arr as $x){
    if($x%2==0) $count++;
}
echo "Số chẵn: $count<br>";

//d. Tổng số lẻ
$sum = 0;
foreach($arr as $x){
    if($x%2!=0) $sum += $x;
}
echo "Tổng lẻ: $sum<br>";

//e. max min
echo "Max: ".max($arr)."<br>";
echo "Min: ".min($arr)."<br>";

//f. đảo mảng
$arr = array_reverse($arr);
print_r($arr);
?>