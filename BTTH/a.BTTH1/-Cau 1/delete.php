<?php
include 'data.php';

// Lấy id từ URL
$id = $_GET['id'];

// Xóa ảnh khỏi thư mục
unlink($flowers[$id]['image']);

// Xóa dữ liệu khỏi mảng
unset($flowers[$id]);

// Lưu lại dữ liệu vào file
file_put_contents('data.php', "<?php\n\$flowers = " . var_export($flowers, true) . ";\n");

// Chuyển hướng về trang danh sách
header('Location: flowers_admin.php');
exit;
?>
