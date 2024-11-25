<?php
// Xử lý thêm dữ liệu
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'data.php';

    // Lấy dữ liệu từ form
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_FILES['image'];

    // Upload ảnh
    $uploadDir = 'images/';
    $imagePath = $uploadDir . basename($image['name']);
    move_uploaded_file($image['tmp_name'], $imagePath);

    // Thêm dữ liệu mới vào mảng
    $flowers[] = [
        'name' => $name,
        'description' => $description,
        'image' => $imagePath
    ];

    // Lưu lại dữ liệu vào file
    file_put_contents('data.php', "<?php\n\$flowers = " . var_export($flowers, true) . ";\n");

    // Chuyển hướng về trang danh sách
    header('Location: flowers_admin.php');
    exit;
}
?>

