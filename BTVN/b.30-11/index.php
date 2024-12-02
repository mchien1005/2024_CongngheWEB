
<?php
$pdo = require_once 'config.php'; // Nhận đối tượng PDO từ config.php
require_once 'controllers/ProductController.php';

$controller = new ProductController($pdo);
//var_dump($pdo); // Debug kiểm tra kiểu dữ liệu của $pdo

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'store':
        $controller->store($_POST);
        break;
    case 'update':
        $controller->update($_GET['id'], $_POST);
        break;
    case 'delete':
        $controller->delete($_GET['id']);
        break;
    default:
        $controller->index();
        break;
}
?>
