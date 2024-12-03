<?php
ob_start(); // Bắt đầu bộ đệm đầu ra
?>

<!-- Main Content -->
<main>
    <div class="container-fluid">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="text-start">
                            <a href="add.php" class="btn btn-success"><span>Thêm
                                mới</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Giá thành</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (!empty($products)): ?>
                        <?php foreach ($products as $index => $product): ?>
                            <tr>
                                <td><?= htmlspecialchars($product['name']); ?></td>
                                <td><?= htmlspecialchars($product['price']); ?> VND</td>
                                <td>
                                    <a href="edit.php?id=<?= $product['id']; ?>" class="edit"><i class="material-icons">edit</i></a>
                                </td>
                                <td>
                                    <a href="delete.php?id=<?= $product['id'] ?>" class="delete"><i class="material-icons">delete</i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5">Không có sản phẩm nào.</td>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
$content = ob_get_clean(); // Lấy nội dung và xóa bộ đệm
include 'C:\xampp\1.CNWEB\2024_CongngheWEB\BTVN\b.30-11\views\layout.php'; // Nhúng layout
?>

