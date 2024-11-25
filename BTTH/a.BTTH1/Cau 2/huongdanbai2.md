# HƯỚNG DẪN THỰC HIỆN BÀI TẬP TRẮC NGHIỆM

## 1. Chuẩn bị dữ liệu
- Tạo tệp `questions.txt` trong thư mục gốc của dự án.
- Dữ liệu trong file phải tuân thủ định dạng sau:

Câu 1: Đây là câu hỏi đầu tiên?
A. Đáp án A
B. Đáp án B
C. Đáp án C
D. Đáp án D
Đáp án: A

Câu 2: Đây là câu hỏi thứ hai?
A. Đáp án A
B. Đáp án B
C. Đáp án C
D. Đáp án D
Đáp án: C

---

## 2. Thiết lập giao diện Bootstrap
### 2.1 Thêm liên kết Bootstrap
Chèn liên kết sau vào phần `<head>` của các file PHP:

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


### 2.2 Sử dụng cấu trúc Bootstrap cơ bản
- **Thẻ chứa nội dung chính (`container`)**:

<div class="container mt-5">
    <!-- Nội dung ở đây -->
</div>

- **Card để hiển thị từng câu hỏi**:

<div class="card mb-4">
    <div class="card-header"><strong>Câu hỏi</strong></div>
    <div class="card-body">
        <!-- Các đáp án -->
    </div>
</div>

- **Nút bấm đẹp cho form**:

<button type="submit" class="btn btn-primary">Nộp bài</button>


## 3. Hiển thị nội dung câu hỏi
### Ý tưởng chính
1. Đọc file `questions.txt` bằng PHP.
2. Duyệt qua từng dòng và nhóm các dòng liên quan đến một câu hỏi.
3. Hiển thị mỗi câu hỏi dưới dạng card Bootstrap.

### Code hỗ trợ đọc file:

$filename = "questions.txt";
$questions = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$current_question = [];
foreach ($questions as $line) {
    if (strpos($line, "Câu") === 0) {
        if (!empty($current_question)) {
            // Xử lý câu hỏi cũ
        }
        $current_question = [];
    }
    $current_question[] = $line;
}


### Tạo giao diện câu hỏi:

echo "<div class='card mb-4'>";
echo "<div class='card-header'><strong>{$question[0]}</strong></div>";
echo "<div class='card-body'>";
for ($i = 1; $i <= 4; $i++) {
    $answer = substr($question[$i], 0, 1); // A, B, C, D
    echo "<div class='form-check'>";
    echo "<input class='form-check-input' type='radio' name='question{$number}' value='{$answer}' id='question{$number}{$answer}'>";
    echo "<label class='form-check-label' for='question{$number}{$answer}'>{$question[$i]}</label>";
    echo "</div>";
}
echo "</div>";
echo "</div>";
---

## 4. Xử lý bài nộp và tính điểm
### Ý tưởng chính
1. Đọc đáp án từ tệp.
2. So sánh câu trả lời của người dùng với đáp án đúng.
3. Tính điểm và hiển thị kết quả.

### Code hỗ trợ tính điểm:

$answers = [];
foreach ($questions as $line) {
    if (strpos($line, "Đáp án:") !== false) {
        $answers[] = trim(substr($line, strpos($line, ":") + 1));
    }
}

$score = 0;
foreach ($_POST as $key => $userAnswer) {
    $questionNumber = (int)filter_var($key, FILTER_SANITIZE_NUMBER_INT);
    if (isset($answers[$questionNumber - 1]) && $answers[$questionNumber - 1] === $userAnswer) {
        $score++;
    }
}

echo "Bạn trả lời đúng $score/" . count($answers) . " câu.";

---

## 5. Hiển thị kết quả
- Kết quả hiển thị trong giao diện Bootstrap với thông báo đẹp:

echo "<div class='alert alert-success text-center'>";
echo "Bạn trả lời đúng <strong>$score</strong>/" . count($answers) . " câu.";
echo "</div>";

- Thêm nút **Làm lại**:

<a href="index.php" class="btn btn-primary">Làm lại</a>

---

## 6. Kiểm tra ứng dụng
1. Đảm bảo file `questions.txt` có định dạng đúng.
2. Truy cập vào `index.php` để làm bài trắc nghiệm.
3. Nộp bài để kiểm tra kết quả hiển thị.
