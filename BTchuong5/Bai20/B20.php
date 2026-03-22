<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập thành viên</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h3>Đăng nhập thành viên</h3>
        <form action="process.php" method="POST">
            <div class="input-group">
                <input type="text" name="email_name" placeholder="Email name" required>
                <span>@blu.edu.vn</span>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="input-group">
                <input type="text" name="ma_so" placeholder="Mã số" required>
            </div>
            <button type="submit" name="login" class="btn-login">Đăng nhập</button>
            <button type="button" class="btn-register">Đăng ký</button>
        </form>
    </div>
</body>
</html>
