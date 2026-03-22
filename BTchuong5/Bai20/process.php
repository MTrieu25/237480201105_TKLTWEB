<?php
if (isset($_POST['login'])) {
    $email = $_POST['email_name'];
    $pass = $_POST['password'];
    $maso = $_POST['ma_so'];

    // Đọc file ini
    $users = parse_ini_file("users.ini", true);
    $is_valid = false;

    foreach ($users as $user) {
        if ($user['email'] == $email && $user['password'] == $pass && $user['maso'] == $maso) {
            $is_valid = true;
            break;
        }
    }

    if ($is_valid) {
        // Tạo cookie lưu trong 3 phút (180 giây)
        setcookie("user_logged", $email, time() + 180, "/");
        echo "Đăng nhập thành công! Chào mừng $email.";
        echo "<br><a href='dashboard.php'>Đi đến trang quản trị</a>";
    } else {
        echo "Thông tin đăng nhập không chính xác!";
        echo "<br><a href='B20.php'>Thử lại</a>";
    }
}
?>
