<?php include 'data.php'; // Tệp chứa mảng $flowers ?>


<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách hoa</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;

        background-color: whitesmoke;
    }

    .container {
        width: 800px;
        margin-top: 0;
        margin-left: 300px;
        padding: 20px 50px 40px;
        background-color: white;
    }

    .flower {
        margin-bottom: 40px;
    }

    .flower-title {
        font-size: 26px;
        font-weight: bold;
        color: #333;
        margin-left: 40px;
    }

    .flower-description {
        color: #555;
        margin-left: 40px;
        margin-right: 50px;
        margin-bottom: 15px;
    }

    .flower-image img {
        margin-left: 40px;
        width: 100%;
        max-width: 700px;
        height: auto;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding-left: 280px;
        
        overflow: hidden;
        background-color: indianred;
    }

    li {
        float: left;
        font-size: 12px;
        font-weight: bold;
    }

    li a {
        display: block;
        color: white;
        font-size: 10px;
        text-align: center;
        padding: 10px 8px;
        text-decoration: none;
    }

    li a:hover {
        background-color: #111;
    }
    </style>
</head>

<body>
    <ul>
        <li><a class="active" href="#home"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                    <path
                        d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5" />
                </svg></a></li>
        <li><a href="#news">HẬU TRƯỜNG</a></li>
        <li><a href="#contact">LIFTSYTE</a></li>
        <li><a href="#about">XÃ HỘI</a></li>
        <li><a href="#news">THẾ GIỚI QUANH TA</a></li>
        <li><a href="#contact">ĐẸP</a></li>
        <li><a href="#about">MẸ&BÉ</a></li>
        <li><a href="#news">GIÁO DỤC</a></li>
        <li><a href="#contact">GIẢI TRÍ</a></li>
        <li><a href="#about">YÊU</a></li>
        <li><a href="#news">SỨC KHỎE</a></li>
        <li><a href="#contact">TIÊU DÙNG</a></li>
        <li><a href="#about">MUA SẮM</a></li>
        <li><a href="#news">ĂN NGON</a></li>
        <li><a href="#contact">TÂM SỰ</a></li>
        <li><a href="#about">. . .</a></li>
    </ul>
    
    <div class="container">
        <h1>14 loại hoa tuyệt đẹp thích hợp trồng để khoe hương sắc dịp xuân hè</h1>

        <?php if (empty($flowers)): ?>
        <p>Hiện chưa có loài hoa nào trong danh sách.</p>
        <?php else: ?>
        <?php foreach ($flowers as $index => $flower): ?>
        <div class="flower">
            <div class="flower-title"><?= $index + 1 ?>. <?= htmlspecialchars($flower['name']) ?></div>
            <div class="flower-description"><?= nl2br(htmlspecialchars($flower['description'])) ?></div>
            <div class="flower-image">
                <img src="<?= htmlspecialchars($flower['image']) ?>" alt="<?= htmlspecialchars($flower['name']) ?>">
            </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>

</body>

</html>