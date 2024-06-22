<?php
require_once 'config/config.php';

class Product {
    private $db;

    public function __construct() {
        $this->db = getDBConnection();
    }

    public function getAllProducts() {
        $stmt = $this->db->query('SELECT * FROM products');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createProduct($name, $description, $price, $image) {
        $stmt = $this->db->prepare('INSERT INTO products (name, description, price, image) VALUES (?, ?, ?, ?)');
        return $stmt->execute([$name, $description, $price, $image]);
    }

    public function deleteProduct($id) {
        $stmt = $this->db->prepare('DELETE FROM products WHERE id = ?');
        return $stmt->execute([$id]);
    }
}