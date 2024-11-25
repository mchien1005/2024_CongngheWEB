<?php
// Đọc nội dung tệp
$fileContent = file_get_contents('Quiz.txt');

// Phân tách các câu hỏi dựa vào dòng trống
$questions = preg_split("/\n\s*\n/", $fileContent);

// Kiểm tra nếu người dùng đã nộp bài
$submitted = isset($_POST['submit']);
$userAnswers = $submitted ? $_POST['answers'] : [];

// Khởi tạo HTML
echo "<!DOCTYPE html>
<html>
<head>
    <title>Bài thi trắc nghiệm</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .question { margin-bottom: 20px; }
        .options { margin-left: 20px; }
        .correct { color: green; font-weight: bold; }
        .wrong { color: red; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Bài thi trắc nghiệm</h1>
    <form method='POST'>";

foreach ($questions as $index => $questionBlock) {
    // Tách từng dòng của một câu hỏi
    $lines = explode("\n", trim($questionBlock));
    
    // Câu hỏi
    $questionText = array_shift($lines);
    
    // Lựa chọn
    $options = array_filter($lines, function($line) {
        return preg_match('/^[A-D]\./', $line);
    });
    
    // Đáp án
    $answerLine = array_filter($lines, function($line) {
        return preg_match('/^ANSWER:/', $line);
    });
    $correctAnswer = str_replace('ANSWER: ', '', reset($answerLine));
    
    // Hiển thị câu hỏi và lựa chọn
    echo "<div class='question'>";
    echo "<p><strong>Câu " . ($index + 1) . ":</strong> $questionText</p>";
    echo "<div class='options'>";
    
    foreach ($options as $option) {
        $optionKey = substr($option, 0, 1); // Lấy chữ cái A, B, C, D
        $isChecked = isset($userAnswers[$index]) && $userAnswers[$index] === $optionKey;
        $checkedAttribute = $isChecked ? "checked" : "";
        
        echo "<label>
            <input type='radio' name='answers[$index]' value='$optionKey' $checkedAttribute>
            $option
        </label><br>";
    }

    // Nếu đã nộp bài, hiển thị đúng/sai
    if ($submitted) {
        if (isset($userAnswers[$index])) {
            if ($userAnswers[$index] === $correctAnswer) {
                echo "<p class='correct'>Đúng!</p>";
            } else {
                echo "<p class='wrong'>Sai! Đáp án đúng là: $correctAnswer</p>";
            }
        } else {
            echo "<p class='wrong'>Bạn chưa chọn đáp án. Đáp án đúng là: $correctAnswer</p>";
        }
    }

    echo "</div>";
    echo "</div>";
}

echo "
        <button type='submit' name='submit'>Nộp bài</button>
    </form>
</body>
</html>";
?>
