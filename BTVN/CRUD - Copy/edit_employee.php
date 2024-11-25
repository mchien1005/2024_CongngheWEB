<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $cost = $_POST['cost'];


    // Xử lý upload ảnh mới (nếu có)
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'images/';
        $fileName = basename($_FILES['image']['name']);
        $targetFile = $uploadDir . $fileName;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            $imagePath = $targetFile;
        } else {
            die("Error uploading the file.");
        }
    } else {
        $imagePath = null; // Không thay đổi ảnh
    }

    // Cập nhật thông tin vào database (ví dụ minh họa)
    // $sql = "UPDATE employees SET name='$name', email='$email', address='$address', phone='$phone'";
    // if ($imagePath) $sql .= ", image='$imagePath'";
    // $sql .= " WHERE id=$id";
    // mysqli_query($conn, $sql);

    echo "Employee updated successfully!";
}
?>
