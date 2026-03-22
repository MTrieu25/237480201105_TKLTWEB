<?php
//Kiểm tra nếu người dùng nhấn nút Đăng nhập
$message = "";
if (isset($_POST['btnSubmit'])) {
    $tenKH = $_POST['txtTenKH'];
    $sdt = $_POST['txtSDT'];

    //Tạo cookie
    setcookie("khach_hang", $tenKH, time() + 600, "/");
    setcookie("so_dien_thoai", $sdt, time() + 600, "/");
    header("Refresh:0");
}

//Xử lý xóa cookie
if (isset($_POST['btnLogOut'])) {
    setcookie("khach_hang", "", time() - 3600, "/");
    setcookie("so_dien_thoai", "", time() - 3600, "/");
    header("Refresh:0");
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 22</title>
    <style>
        .container { width: 400px; margin: 50px auto; border: 1px solid #ccc; padding: 20px; border-radius: 8px; }
        .info-box { background-color: #e7f3fe; padding: 10px; border-left: 5px solid #2196F3; margin-top: 20px; }
        input { width: 95%; padding: 8px; margin: 10px 0; }
        button { padding: 10px 20px; cursor: pointer; }
    </style>
</head>
<body>

<div class="container">
    <h3>ĐĂNG NHẬP KHÁCH HÀNG</h3>
    
    <form method="POST">
        <label>Tên khách hàng:</label>
        <input type="text" name="txtTenKH" required placeholder="Nhập tên của bạn">
        
        <label>Số điện thoại:</label>
        <input type="text" name="txtSDT" required placeholder="Nhập số điện thoại">
        
        <button type="submit" name="btnSubmit">Đăng nhập (Lưu Cookie)</button>
    </form>

    <hr>

    <?php if (isset($_COOKIE['khach_hang']) && isset($_COOKIE['so_dien_thoai'])): ?>
        <div class="info-box">
            <h4>Thông tin từ Cookie:</h4>
            <p><strong>Tên KH:</strong> <?php echo $_COOKIE['khach_hang']; ?></p>
            <p><strong>Số điện thoại:</strong> <?php echo $_COOKIE['so_dien_thoai']; ?></p>
            <p><i>(Dữ liệu này sẽ tự động xóa sau 10 phút)</i></p>
            <form method="POST">
                <button type="submit" name="btnLogOut" style="background-color: #ff4d4d; color:white; border:none;">Xóa Cookie ngay</button>
            </form>
        </div>
    <?php else: ?>
        <p style="color: red;">Chưa có thông tin cookie hoặc cookie đã hết hạn.</p>
    <?php endif; ?>
</div>
</body>
</html>