<?php

class Order {
    public string $orderCode;
    public string $orderDate;
    public string $customerName;
    public array $products = [];

    public function __construct(string $orderCode, string $orderDate, string $customerName, array $products) {
        $this->orderCode = $orderCode;
        $this->orderDate = $orderDate;
        $this->customerName = $customerName;
        $this->products = $products;
    }

    public function addProduct(string $productName, float $price) {
        $this->products[] = ['name' => $productName, 'price' => $price];
    }

    public function getTotalPrice(): float {
        $totalPrice = 0;
        foreach ($this->products as $product) {
            $totalPrice += $product['price'];
        }
        return $totalPrice;
    }

    public function getOrderInfo() {
        echo "Order Code: {$this->orderCode}\n";
        echo "Order Date: {$this->orderDate}\n";
        echo "Customer Name: {$this->customerName}\n";
        echo "Products:\n";
        foreach ($this->products as $product) {
            echo "- {$product['name']}: {$product['price']}\n";
        }
        echo "Total Price: {$this->getTotalPrice()}\n";
    }
}

// Tạo đối tượng Order
$order = new Order("ORD123", "2024-05-08", "John Doe", []);

// Thêm sản phẩm vào đơn hàng
$order->addProduct("Product 1", 10.5);
$order->addProduct("Product 2", 20.3);

// Hiển thị thông tin đơn hàng
$order->getOrderInfo();
?>