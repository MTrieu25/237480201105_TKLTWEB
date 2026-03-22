<?php
$thong_bao = "";
if (isset($_POST['btnUpload'])) {
    $thu_muc_target = "Tailieu/";
    $file_name = basename($_FILES["fileToUpload"]["name"]);
    $duong_dan_file = $thu_muc_target . $file_name;

    if (!empty($file_name)) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $duong_dan_file)) {
            $thong_bao = "<p style='color: green;'>Chúc mừng! File <b>$file_name</b> đã được tải lên thành công vào thư mục <b>Tailieu</b>.</p>";
        } else {
            $thong_bao = "<p style='color: red;'>Có lỗi xảy ra khi upload file.</p>";
        }
    } else {
        $thong_bao = "<p style='color: orange;'>Vui lòng chọn một file trước khi nhấn Upload.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 23</title>
    <style>
        .upload-form { width: 450px; margin: 50px auto; border: 2px dashed #007bff; padding: 30px; text-align: center; border-radius: 10px; font-family: sans-serif; }
        input[type="file"] { margin-bottom: 20px; }
        input[type="submit"] { background: #007bff; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px; }
        input[type="submit"]:hover { background: #0056b3; }
    </style>
</head>
<body>

<div class="upload-form">
    <h2>UPLOAD MỘT FILE LÊN SERVER</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br>
        <input type="submit" value="Upload File" name="btnUpload">
    </form>

    <div class="result">
        <?php echo $thong_bao; ?>
    </div>
</div>
</body>
</html>