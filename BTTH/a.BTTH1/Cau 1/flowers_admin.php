<?php include 'data.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản lý loài hoa</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Quản lý loài hoa</h1>
        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#addModal">Thêm loài hoa</button>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên hoa</th>
                    <th>Mô tả</th>
                    <th>Hình ảnh</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($flowers as $index => $flower): ?>
                    <tr>
                        <td><?= $index + 1; ?></td>
                        <td><?= $flower['name']; ?></td>
                        <td><?= $flower['description']; ?></td>
                        <td>
                            <img src="<?= $flower['image']; ?>" alt="<?= $flower['name']; ?>" width="100">
                        </td>
                        <td>
                            <button class="btn btn-warning" data-toggle="modal" data-target="#editModal<?= $index; ?>">Sửa</button>
                            <a href="delete.php?id=<?= $index; ?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>
                        </td>
                    </tr>

                    <!-- Modal Sửa -->
                    <div class="modal fade" id="editModal<?= $index; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel<?= $index; ?>" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel<?= $index; ?>">Sửa loài hoa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Đóng">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="edit.php?id=<?= $index; ?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="name">Tên hoa</label>
                                            <input type="text" class="form-control" id="name" name="name" value="<?= $flower['name']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Mô tả</label>
                                            <textarea class="form-control" id="description" name="description" required><?= $flower['description']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Hình ảnh</label>
                                            <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                                            <img src="<?= $flower['image']; ?>" alt="<?= $flower['name']; ?>" width="100" class="mt-2">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Modal Thêm -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Thêm loài hoa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Đóng">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="add.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Tên hoa</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Mô tả</label>
                            <textarea class="form-control" id="description" name="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Hình ảnh</label>
                            <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Thêm Bootstrap JS và jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
