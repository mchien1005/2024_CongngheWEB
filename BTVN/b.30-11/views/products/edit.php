<!-- edit_product.php -->
<?php
$pdo = require_once '../../config.php'; // Nhận đối tượng PDO từ config.php
require_once '../../controllers/productcontroller.php';

$controller = new ProductController($pdo);
// Lấy thông tin sản phẩm theo ID
$product = $controller->getProductById($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Sửa sản phẩm</h2>
    <?php
    // Lấy thông tin sản phẩm theo ID
    $product = $controller->getProductById($_GET['id']);
    ?>
    <form action="../../../b.30-11/index.php?action=update&id=<?= $product['id'] ?>" method="POST" class="shadow p-4 bg-light rounded">
        <div class="mb-3">
            <label for="name" class="form-label">Tên sản phẩm</label>
            <input type="text" id="name" name="name" class="form-control" value="<?= htmlspecialchars($product['name']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Giá sản phẩm</label>
            <input type="number" id="price" name="price" class="form-control" value="<?= $product['price'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="../../../b.30-11/index.php" class="btn btn-secondary">Hủy</a>
    </form>
</div>
</body>
</html>
