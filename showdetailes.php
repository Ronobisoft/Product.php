<?php
class Product {
    public $id;
    public $name;
    public $price;

  
    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    
    public function getFormattedPrice() {
        return number_format($this->price, 2); 
    }

    
    public function showDetails() {
        echo "-Product ID: {$this->id}\n";
        echo "-Product Name: {$this->name}\n";
        echo "-Formatted Price: {$this->getFormattedPrice()}\n";
    }
}


$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();
