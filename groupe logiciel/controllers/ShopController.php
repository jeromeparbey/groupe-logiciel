<?php
require_once 'models/Product.php';

class ShopController {
    private $productModel;

    public function __construct() {
        $this->productModel = new Product();
    }

    public function index() {
        $products = $this->productModel->getAllProducts();
        include 'views/shop.php';
    }
}