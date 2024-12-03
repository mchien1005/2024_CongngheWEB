<!-- delete_product.php -->
<?php
$pdo = require_once 'C:\xampp\1.CNWEB\b.30-11\config.php'; // Nhận đối tượng PDO từ config.php
require_once 'C:\xampp\1.CNWEB\b.30-11\controllers\productcontroller.php';

$controller = new ProductController($pdo);
// Lấy thông tin sản phẩm theo ID
$product = $controller->getProductById($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="alert alert-danger shadow-sm p-4">
        <h4 class="mb-4">Xóa sản phẩm</h4>
        <p>Bạn có chắc chắn muốn xóa sản phẩm <strong>"<?= htmlspecialchars($product['name']) ?>"</strong> không?</p>
        <form action="../../../b.30-11/index.php?action=delete&id=<?= $product['id'] ?>" method="POST">
            <button type="submit" class="btn btn-danger">Xóa</button>
            <a href="../../../b.30-11/index.php" class="btn btn-secondary">Hủy</a>
        </form>
    </div>
</div>
</body>
</html>

