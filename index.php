<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Site Web</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
session_start();
ob_start();

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($controller) {
    case 'home':
        require_once 'controllers/HomeController.php';
        $controller = new HomeController();
        break;
    case 'shop':
        require_once 'controllers/ShopController.php';
        $controller = new ShopController();
        break;
    case 'services':
        require_once 'controllers/ServicesController.php';
        $controller = new ServicesController();
        break;
    case 'about':
        require_once 'controllers/AboutController.php';
        $controller = new AboutController();
        break;
    case 'product':
        require_once 'controllers/ProductController.php';
        $controller = new ProductController();
        break;
    case 'user':
        require_once 'controllers/UserController.php';
        $controller = new UserController();
        break;
    default:
        die('Controller not found');
}

if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    die('Action not found');
}

ob_end_flush();
?>

</body>
</html>