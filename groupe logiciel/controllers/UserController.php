<?php
require_once 'models/User.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = $this->userModel->getUser($username);

            if ($user && password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['username'] = $username;
                header('Location: index.php');
            } else {
                echo 'Nom d\'utilisateur ou mot de passe incorrect';
            }
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: index.php');
    }
}
?>




