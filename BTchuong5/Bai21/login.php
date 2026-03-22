<?php
session_start();

if (isset($_POST['btnLogin'])) {
    $user = $_POST['txtUser'];
    $email = $_POST['txtEmail'];
    $pass = $_POST['txtPass'];

    // Giả sử kiểm tra hợp lệ 
    if (!empty($user) && !empty($email) && !empty($pass)) {
        // Lưu vào session
        $_SESSION['username'] = $user;
        $_SESSION['email'] = $email;
  
        echo "<div style='border: 1px solid black; width: 400px; padding: 20px; margin: auto; text-align: center;'>";
        echo "<h3>TRANG XỬ LÝ THÔNG TIN ĐĂNG NHẬP</h3>";
        echo "<p>Thông tin đăng nhập hợp lệ</p>";
        echo "<a href='mainpage.php' style='background: #555; color: white; padding: 5px 10px; text-decoration: none;'>Trang chính</a>";
        echo "</div>";
    } else {
        echo "Vui lòng nhập đầy đủ thông tin! <a href='login.html'>Quay lại</a>";
    }
}
?>
