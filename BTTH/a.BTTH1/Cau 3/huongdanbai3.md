Dưới đây là hướng dẫn chi tiết cách đọc dữ liệu từ tệp `.csv` và hiển thị trên giao diện với Bootstrap. Nội dung được trình bày dưới dạng tài liệu Markdown.

---

# HƯỚNG DẪN ĐỌC TỆP CSV VÀ HIỂN THỊ DỮ LIỆU

## Mục tiêu
- Đọc dữ liệu từ tệp `.csv` chứa danh sách sinh viên.
- Lưu dữ liệu vào mảng PHP (`$sinhvien`) để xử lý.
- Hiển thị dữ liệu lên giao diện đẹp với **Bootstrap 5**.


## 1. Chuẩn bị dữ liệu
### Định dạng tệp CSV
Sử dụng tệp KTPM2.csv

## 2. Đọc dữ liệu từ tệp CSV
### Ý tưởng chính:
1. Dùng hàm `fgetcsv` để đọc từng dòng trong file CSV.
2. Lưu dữ liệu vào mảng PHP `$sinhvien`.

### Code hỗ trợ đọc file:

<?php
// Đường dẫn tới file CSV
$filename = "students.csv";

// Mảng chứa dữ liệu sinh viên
$sinhvien = [];

// Mở file CSV
if (($handle = fopen($filename, "r")) !== FALSE) {
    // Đọc dòng đầu tiên (tiêu đề)
    $headers = fgetcsv($handle, 1000, ",");

    // Đọc từng dòng dữ liệu
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $sinhvien[] = array_combine($headers, $data);
    }

    fclose($handle);
}

// In mảng sinh viên (chỉ để kiểm tra)
print_r($sinhvien);
?>


## 3. Hiển thị dữ liệu trên giao diện
### Ý tưởng chính:
- Sử dụng Bootstrap để tạo bảng hiển thị dữ liệu.
- Các trường hiển thị bao gồm: **ID, Họ tên, Ngày sinh, Lớp, Điểm trung bình**.

### Code hỗ trợ hiển thị:

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Danh sách sinh viên</h1>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Họ tên</th>
                    <th>Ngày sinh</th>
                    <th>Lớp</th>
                    <th>Điểm trung bình</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Hiển thị từng sinh viên
                foreach ($sinhvien as $sv) {
                    echo "<tr>";
                    echo "<td>{$sv['ID']}</td>";
                    echo "<td>{$sv['Họ tên']}</td>";
                    echo "<td>{$sv['Ngày sinh']}</td>";
                    echo "<td>{$sv['Lớp']}</td>";
                    echo "<td>{$sv['Điểm trung bình']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
```

---

## 4. Kiểm tra kết quả
### Các bước thực hiện:
1. **Tạo file CSV**:
   - Lưu tệp `KTPM2.csv` vào thư mục gốc của dự án.
2. **Chạy script PHP**:
   - Mở file PHP trong trình duyệt.
   - Kết quả hiển thị danh sách sinh viên dưới dạng bảng Bootstrap.

---
