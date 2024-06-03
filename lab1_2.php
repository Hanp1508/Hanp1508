<?php
class Product {
    public $name;
    public $price;
    public $quantity;

    public function __construct($name, $price, $quantity) {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getInfo() {
        return "Product Name: $this->name, Price: $this->price, Quantity: $this->quantity";
    }

    public function calculateTotal() {
        return $this->price * $this->quantity;
    }
}

// Sử dụng lớp Product
$product1 = new Product("Smartphone", 500, 10);
echo $product1->getInfo();  // In thông tin của product1
echo "\nTotal Value: " . $product1->calculateTotal();  // Tính toán tổng giá trị của product1
?>
