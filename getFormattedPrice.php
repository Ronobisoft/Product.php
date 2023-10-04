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
}
$product1 = new Product(1, "Widget", 19.99);
$formattedPrice = $product1->getFormattedPrice();
echo $formattedPrice; 
