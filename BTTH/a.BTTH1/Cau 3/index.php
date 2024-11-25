<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
// Đường dẫn tới tệp CSV
$filename = "KTPM2.csv";

// Mảng chứa dữ liệu sinh viên
$sinhvien = [];

// Kiểm tra tệp có tồn tại không
if (file_exists($filename)) {
    // Mở tệp CSV
    if (($handle = fopen($filename, "r")) !== FALSE) {
        // Đọc tiêu đề cột (dòng đầu tiên)
        $headers = fgetcsv($handle, 1000, ",");

        // Đọc từng dòng dữ liệu
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            // Kết hợp tiêu đề cột và giá trị để tạo mảng liên kết
            $sinhvien[] = array_combine($headers, $data);
        }
        // Đóng tệp
        fclose($handle);
    }
} else {
    echo "Tệp $filename không tồn tại.";
}

// Kiểm tra mảng dữ liệu (tạm thời)
// print_r($sinhvien);
?>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Danh sách sinh viên</h1>
        <!-- Kiểm tra dữ liệu sinh viên -->
        <?php if (!empty($sinhvien)) : ?>
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
                // Duyệt qua từng sinh viên và hiển thị
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
        <?php else : ?>
        <div class="alert alert-warning text-center">
            Không có dữ liệu sinh viên để hiển thị.
        </div>
        <?php endif; ?>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>