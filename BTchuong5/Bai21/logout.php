<?php
session_start();
// Hủy bỏ tất cả session
session_destroy();
// Quay lại trang đăng nhập
header("Location: login.html");
exit();
?>
