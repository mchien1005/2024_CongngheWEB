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

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sửa loài hoa</title>
</head>
<body>
    <h1>Sửa loài hoa</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="name">Tên hoa:</label><br>
        <input type="text" id="name" name="name" value="<?= $flower['name']; ?>" required><br><br>

        <label for="description">Mô tả:</label><br>
        <textarea id="description" name="description" required><?= $flower['description']; ?></textarea><br><br>

        <label for="image">Hình ảnh:</label><br>
        <input type="file" id="image" name="image" accept="image/*"><br><br>
        <img src="<?= $flower['image']; ?>" alt="<?= $flower['name']; ?>" width="100"><br><br>

        <button type="submit">Cập nhật</button>
    </form>
</body>
</html>
