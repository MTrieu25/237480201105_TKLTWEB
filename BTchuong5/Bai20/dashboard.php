<?php
if (!isset($_COOKIE['user_logged'])) {
    echo "Hết phiên làm việc hoặc chưa đăng nhập. Bạn sẽ bị đăng xuất.";
    // Tự động chuyển hướng về trang chủ sau 2 giây
    header("Refresh: 2; url=B20.php");
    exit();
}
echo "Chào mừng bạn, " . $_COOKIE['user_logged'] . ". Bạn vẫn đang trong phiên đăng nhập (3 phút).";
?>
