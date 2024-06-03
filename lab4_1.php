<?php

// Giao diện ShapeInterface
interface ShapeInterface {
    public function calculateArea();
    public function calculatePerimeter();
}

// Lớp Circle thực thi giao diện ShapeInterface
class Circle implements ShapeInterface {
    private $radius;

    // Constructor để khởi tạo bán kính
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Getter và Setter cho radius
    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    // Tính diện tích hình tròn
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }

    // Tính chu vi hình tròn
    public function calculatePerimeter() {
        return 2 * pi() * $this->radius;
    }
}

// Lớp Rectangle thực thi giao diện ShapeInterface
class Rectangle implements ShapeInterface {
    private $length;
    private $width;

    // Constructor để khởi tạo chiều dài và chiều rộng
    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    // Getters và Setters cho length và width
    public function getLength() {
        return $this->length;
    }

    public function setLength($length) {
        $this->length = $length;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    // Tính diện tích hình chữ nhật
    public function calculateArea() {
        return $this->length * $this->width;
    }

    // Tính chu vi hình chữ nhật
    public function calculatePerimeter() {
        return 2 * ($this->length + $this->width);
    }
}

// Tạo đối tượng Circle và Rectangle
$circle = new Circle(5); // Bán kính là 5
$rectangle = new Rectangle(4, 7); // Chiều dài là 4 và chiều rộng là 7

// Hiển thị diện tích và chu vi của hình tròn
echo "Circle:<br>";
echo "Radius: " . $circle->getRadius() . "<br>";
echo "Area: " . $circle->calculateArea() . "<br>";
echo "Perimeter: " . $circle->calculatePerimeter() . "<br>";

echo "\n";

// Hiển thị diện tích và chu vi của hình chữ nhật
echo "Rectangle:<br>";
echo "Length: " . $rectangle->getLength() . "<br>";
echo "Width: " . $rectangle->getWidth() . "<br>";
echo "Area: " . $rectangle->calculateArea() . "<br>";
echo "Perimeter: " . $rectangle->calculatePerimeter() . "<br>";

?>