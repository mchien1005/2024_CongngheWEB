<?php include 'data.php'; ?>
<div class="container-fluid">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="text-start">
                        <a href="#addModal" class="btn btn-success" data-toggle="modal"><span>Thêm
                                mới</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Sản phẩm</th>
                        <th>Giá thành</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $index => $product): ?>
                    <tr>
                        <td><?= $index + 1; ?></td>
                        <td><?= $product['name']; ?></td>
                        <td><?= $product['price']; ?> VND</td>
                        <td><a href="#editModal<?= $index; ?>" class="edit" data-toggle="modal"><i class="material-icons"
                                    data-toggle="tooltip" title="Edit">edit</i></a></td>
                        <td><a href="#deleteEmployeeModal<?= $index; ?>" class="delete" data-toggle="modal"><i class="material-icons"
                                    data-toggle="tooltip" title="Delete">delete</i></a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Modal HTML -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Thêm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Đóng">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="add_pro.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Sản phẩm</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Giá thành</label>
                        <input type="text" name="price" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Thêm</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal HTML -->
<?php foreach ($products as $index => $product): ?>
<div class="modal fade" id="editModal<?= $index; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel<?= $index; ?>" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel<?= $index; ?>">Sửa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Đóng">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="edit_pro.php?id=<?= $index; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $product['name']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Giá thành</label>
                        <input type="text" class="form-control" id="price" name="price" value="<?= $product['price']; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<!-- Delete Modal HTML -->
<?php foreach ($products as $index => $product): ?>
<div id="deleteEmployeeModal<?= $index; ?>" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="delete_pro.php?id=<?= $index; ?>" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Xóa sản phẩm</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Bạn có chắc chắn muốn xóa sản phẩm này không?</p>
                    <p class="text-warning"><small>Hành động này không thể phục hồi.</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Hủy bỏ">
                    <input type="submit" class="btn btn-danger" value="Xóa">
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
