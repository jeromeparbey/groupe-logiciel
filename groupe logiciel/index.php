<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IRT_SHOP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/svg+xml" href="public/images/irt-black.svg">

 
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
</head>
<body>
<div class="body-container" >


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
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
