<?php
include 'data.php';

// Lấy id từ URL
$id = $_GET['id'];

// Xóa ảnh khỏi thư mục
//unlink($flowers[$id]['image']);

// Xóa dữ liệu khỏi mảng
unset($products[$id]);

// Lưu lại dữ liệu vào file
file_put_contents('data.php', "<?php\n\$products = " . var_export($products, true) . ";\n");

// Chuyển hướng về trang danh sách
header('Location: index.php');
exit;
?>
