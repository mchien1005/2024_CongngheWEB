<?php
// Xử lý thêm dữ liệu
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'data.php';

    // Lấy dữ liệu từ form
    $name = $_POST['name'];
    $price = $_POST['price'];


    // Thêm dữ liệu mới vào mảng
    $products[] = [
        'name' => $name,
        'price' => $price,
    ];

    // Lưu lại dữ liệu vào file
    file_put_contents('data.php', "<?php\n\$products = " . var_export($products, true) . ";\n");

    // Chuyển hướng về trang danh sách
    header('Location: index.php');
    exit;
}
?>

