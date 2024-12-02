<?php
require_once 'C:\xampp\1.CNWEB\Project\config.php';

class Product {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM products");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getProductById($id) {
        // Truy vấn SQL để lấy sản phẩm theo id
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        $product = $stmt->fetch(PDO::FETCH_ASSOC);

        return $product;
    }
    public function add($name, $price) {
        $stmt = $this->pdo->prepare("INSERT INTO products (name, price) VALUES (?, ?)");
        return $stmt->execute([$name, $price]);
    }

    public function update($id, $name, $price) {
        $stmt = $this->pdo->prepare("UPDATE products SET name = ?, price = ? WHERE id = ?");
        return $stmt->execute([$name, $price, $id]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM products WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>

