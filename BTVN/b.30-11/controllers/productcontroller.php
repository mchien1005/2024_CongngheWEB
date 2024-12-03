<?php
require_once 'C:\xampp\1.CNWEB\2024_CongngheWEB\BTVN\b.30-11\models\product.php';

class ProductController {
    private $product;

    public function __construct($pdo) {
        $this->product = new Product($pdo);
    }

    public function index() {
        $products = $this->product->getAll();
        require 'C:\xampp\1.CNWEB\2024_CongngheWEB\BTVN\b.30-11\views\products\index.php';
    }

    public function getProductById($id) {
        return $this->product->getProductById($id);
    }

    public function store($data) {
        $this->product->add($data['name'], $data['price']);
        header("Location: index.php");
    }

    public function update($id, $data) {
        $this->product->update($id, $data['name'], $data['price']);
        header("Location: index.php");
    }

    public function delete($id) {
        $this->product->delete($id);
        header("Location: index.php");
    }
}

?>

