<?php
session_start();

// Kiểm tra nếu chưa đăng nhập thì đẩy về trang login
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang chính</title>
</head>
<body>
    <div style="border: 1px solid black; width: 600px; padding: 20px; margin: auto;">
        <h3>TRANG CHÍNH</h3>
        <p>Người dùng đã đăng nhập với tên <b>
            <?php echo $_SESSION['username']; ?></b> và Email là <b><?php echo $_SESSION['email']; ?></b></p>
        <hr>
        <a href="logout.php">Đăng xuất</a>
    </div>
</body>
</html>
