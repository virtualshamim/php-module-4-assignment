<?php
class Product {
    // TODO: Add properties
    public $id;
    public $name;
    public $price;

    public function __construct($id, $name, $price) {
        // TODO: Initialize properties
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
// TODO: Add getFormattedPrice method
    public function getFormattedPrice() {
        return '$' . number_format($this->price, 2);
    }
 // TODO: Add showDetails method
    public function showDetails() {
        echo "Product Details:" . PHP_EOL;
        echo "- ID: {$this->id}" . PHP_EOL;
        echo "- Name: {$this->name}" . PHP_EOL;
        echo "- Price: {$this->getFormattedPrice()}" . PHP_EOL;
    }
}

// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();