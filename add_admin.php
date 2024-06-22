<?php
require_once 'config/config.php';
require_once 'models/User.php';

$userModel = new User();
$username = 'admin';
$password = 'groupe2';

if ($userModel->createUser($username, $password)) {
    echo "Admin user created successfully.";
} else {
    echo "Failed to create admin user.";
}
?>;
