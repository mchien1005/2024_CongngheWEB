<?php
$host = 'localhost';
$db = 'sanpham';
$user = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
} catch (PDOException $e) {
    die("Kết nối thất bại: " . $e->getMessage());
} // Debug kiểm tra kiểu dữ liệu của $pdo
//return $pdo;
?>
