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
    }

    .container {
        width: 800px;
        margin-top: 0;
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

    </style>
</head>

<body>
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