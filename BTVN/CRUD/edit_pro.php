<?php
include 'data.php';

// Lấy id từ URL
$id = $_GET['id'];
$product = $products[$id];

// Xử lý cập nhật dữ liệu
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];

    // Cập nhật dữ liệu
    $products[$id]['name'] = $name;
    $products[$id]['price'] = $price;

    
    // Lưu lại dữ liệu vào file
    file_put_contents('data.php', "<?php\n\$products = " . var_export($products, true) . ";\n");

    // Chuyển hướng về trang danh sách
    header('Location: index.php');
    exit;
}
?>