<?php
include 'data.php';

// Lấy id từ URL
$id = $_GET['id'];
$flower = $flowers[$id];

// Xử lý cập nhật dữ liệu
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_FILES['image'];

    // Cập nhật dữ liệu
    $flowers[$id]['name'] = $name;
    $flowers[$id]['description'] = $description;

    // Nếu có upload ảnh mới
    if ($image['name']) {
        $uploadDir = 'images/';
        $imagePath = $uploadDir . basename($image['name']);
        move_uploaded_file($image['tmp_name'], $imagePath);
        $flowers[$id]['image'] = $imagePath;
    }

    // Lưu lại dữ liệu vào file
    file_put_contents('data.php', "<?php\n\$flowers = " . var_export($flowers, true) . ";\n");

    // Chuyển hướng về trang danh sách
    header('Location: flowers_admin.php');
    exit;
}
?>

