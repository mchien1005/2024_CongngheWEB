<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Thêm sản phẩm mới</h2>
    <form action="../../../Project/index.php?action=store" method="POST" class="shadow p-4 bg-light rounded">
        <div class="mb-3">
            <label for="name" class="form-label">Tên sản phẩm</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Nhập tên sản phẩm" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Giá sản phẩm</label>
            <input type="number" id="price" name="price" class="form-control" placeholder="Nhập giá sản phẩm" required>
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
        <a href="../../../Project/index.php" class="btn btn-secondary">Hủy</a>
    </form>
</div>
</body>
</html>
