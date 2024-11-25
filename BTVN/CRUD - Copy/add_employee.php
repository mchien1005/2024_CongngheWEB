<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $cost = $_POST['cost'];

    
    // Xử lý upload ảnh
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
        $imagePath = null; // Không có ảnh
    }
    
    // Lưu thông tin vào database (ví dụ minh họa)
    // $sql = "INSERT INTO employees (name, email, address, phone, image) VALUES ('$name', '$email', '$address', '$phone', '$imagePath')";
    // mysqli_query($conn, $sql);

    echo "Employee added successfully!";
}
?>
