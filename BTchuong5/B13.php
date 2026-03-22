<?php
function timMax($mang) {
    return max($mang);
}

function laSoChinhPhuong($n) {
    return sqrt($n) == floor(sqrt($n));
}

function inSoChan($mang) {
    $kq = [];
    foreach($mang as $v) if($v % 2 == 0) $kq[] = $v;
    return implode(", ", $kq);
}

function sapXepTang($mang) {
    sort($mang);
    return implode(", ", $mang);
}

$ketqua = "";
if (isset($_POST['submit'])) {
    $day_so = $_POST['day_so'];
    $mang = explode(",", $day_so);
    $chon = $_POST['menu'];

    switch ($chon) {
        case 'max': $ketqua = "Số lớn nhất là: " . timMax($mang); break;
        case 'chan': $ketqua = "Các số chẵn: " . inSoChan($mang); break;
        case 'chinhphuong': 
            $cp = array_filter($mang, 'laSoChinhPhuong');
            $ketqua = "Số chính phương: " . implode(", ", $cp);
            break;
        case 'sapxep': $ketqua = "Mảng sau khi sắp xếp: " . sapXepTang($mang); break;
    }
}
?>

<form method="post">
    Nhập dãy số (cách nhau bằng dấu phẩy): <br>
    <input type="text" name="day_so" value="5,8,9,16,2,7"> <br><br>
    
    Chọn chức năng:
    <select name="menu">
        <option value="max">Tìm số lớn nhất</option>
        <option value="chan">In số chẵn</option>
        <option value="chinhphuong">Tìm số chính phương</option>
        <option value="sapxep">Sắp xếp tăng dần</option>
    </select>
    <input type="submit" name="submit" value="Thực hiện">
</form>

<h3>Kết quả: <?php echo $ketqua; ?></h3>