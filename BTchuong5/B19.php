<?php
    echo "Chào bạn,<br>";
    if(isset($_COOKIE['thoiGianTruyCap'])) {
        echo "thời gian truy cập gần đây nhất là: ".date('d/m/Y H:i:s', $_COOKIE['thoiGianTruyCap']);
        setcookie('thoiGianTruyCap', time(), time() + 600);
    } else {
        setcookie('thoiGianTruyCap', time(), time() + 600);
    }
?>