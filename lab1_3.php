<?php
class Rectangle {
    public $length;
    public $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function getArea() {
        return $this->length * $this->width;
    }

    public function getPerimeter() {
        return 2 * ($this->length + $this->width);
    }

    public function drawRectangle() {
        echo "<div style='width: {$this->width}px; height: {$this->length}px; border: 1px solid black;'></div>";
    }
}

// Sử dụng lớp Rectangle
$rectangle1 = new Rectangle(10, 5);
echo "Area: " . $rectangle1->getArea() . " square units<br>";  // In diện tích của rectangle1
echo "Perimeter: " . $rectangle1->getPerimeter() . " units<br>";  // In chu vi của rectangle1
echo "Drawing Rectangle:<br>";
$rectangle1->drawRectangle();  // Vẽ hình chữ nhật cho rectangle1
?>
