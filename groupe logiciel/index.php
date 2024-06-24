<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
session_start();
ob_start();

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'product';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($controller) {
    case 'product':
        require_once 'controllers/ProductController.php';
        $controller = new ProductController();
        break;
        case 'shop':
            require_once 'controllers/ShopController.php';
            $controller = new ShopController();
            break;
    case 'user':
        require_once 'controllers/UserController.php';
        $controller = new UserController();
        break;
    default:
        die('Controller not found');
        
}


$controller->$action();
ob_end_flush();
?>

</body>
</html>

