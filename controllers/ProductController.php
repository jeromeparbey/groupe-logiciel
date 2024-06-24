<?php
require_once 'models/Product.php';
require_once 'functions.php';

class ProductController {
    private $productModel;

    public function __construct() {
        $this->productModel = new Product();
    }

    public function index() {
        $products = $this->productModel->getAllProducts();
        include 'views/products.php';
    }


    public function create() {
        if (!isset($_SESSION['username'])) {
            header('Location: index.php');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];

            $imageName = '';
            if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                $imageName = storeUploadedImage($_FILES['image']);
                if ($imageName === false) {
                    echo "Erreur lors de l'upload de l'image.";
                    return;
                }
            } else {
                echo "Erreur lors de l'upload de l'image.";
                return;
            }

            // Créer le produit dans la base de données
            if ($this->productModel->createProduct($name, $description, $price, $imageName)) {
                header('Location: index.php');
                exit;
            } else {
                echo "Erreur lors de la création du produit dans la base de données.";
            }
        }
    }

    public function delete() {
        if (!isset($_SESSION['username'])) {
            header('Location: index.php');
            exit;
        }
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product_id'])) {
            $productId = $_POST['product_id'];
            if ($this->productModel->deleteProduct($productId)) {
                header('Location: index.php?controller=product&action=index');
                exit;
            } else {
                echo "Erreur lors de la suppression du produit.";
            }
        } else {
            echo "Requête invalide pour la suppression du produit.";
        }
    }
}
?>