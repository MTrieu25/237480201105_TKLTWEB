<?php
$thong_bao = "";

if (isset($_POST['btnUploadMulti'])) {
    $thu_muc_dich = "BoSuuTap/";
    
    if (!empty($_FILES['filesToUpload']['name'][0])) {
        
        $total_files = count($_FILES['filesToUpload']['name']);
        $success_count = 0;

        for ($i = 0; $i < $total_files; $i++) {
            $file_name = $_FILES['filesToUpload']['name'][$i];
            $file_tmp = $_FILES['filesToUpload']['tmp_name'][$i];
            $duong_dan_file = $thu_muc_dich . basename($file_name);

            $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
            $allow_ext = array("jpg", "jpeg", "png", "gif");

            if (in_array($ext, $allow_ext)) {
                if (move_uploaded_file($file_tmp, $duong_dan_file)) {
                    $success_count++;
                }
            }
        }

        if ($success_count > 0) {
            $thong_bao = "<p style='color: green;'>Đã tải lên thành công $success_count file vào thư mục <b>BoSuuTap</b>.</p>";
        } else {
            $thong_bao = "<p style='color: red;'>Không có file nào hợp lệ hoặc lỗi trong quá trình upload.</p>";
        }
    } else {
        $thong_bao = "<p style='color: orange;'>Vui lòng chọn ít nhất một file ảnh.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 24</title>
    <style>
        .container { width: 500px; margin: 50px auto; border: 2px solid #28a745; padding: 20px; border-radius: 10px; font-family: Arial, sans-serif; text-align: center; }
        .file-input { margin: 20px 0; }
        .btn-submit { background-color: #28a745; color: white; border: none; padding: 10px 25px; border-radius: 5px; cursor: pointer; }
        .btn-submit:hover { background-color: #218838; }
        .gallery-link { margin-top: 15px; display: block; color: #007bff; text-decoration: none; }
    </style>
</head>
<body>

<div class="container">
    <h2>BỘ SƯU TẬP ẢNH</h2>
    <p>Chọn nhiều file ảnh (jpg, png, gif) để upload:</p>
    
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="file-input">
            <input type="file" name="filesToUpload[]" id="filesToUpload" multiple accept="image/*">
        </div>
        <input type="submit" value="Tải lên Bộ Sưu Tập" name="btnUploadMulti" class="btn-submit">
    </form>

    <div class="result">
        <?php echo $thong_bao; ?>
    </div>
</div>
</body>
</html>