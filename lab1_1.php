<?php
class Person {
    public $name;
    public $age;
    public $address;

    public function __construct($name, $age, $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    public function getInfo() {
        return "Name: $this->name, Age: $this->age, Address: $this->address";
    }

    public function canVote() {
        return $this->age >= 18;
    }
}

// Sử dụng lớp Person
$person1 = new Person("John", 25, "123 Main St, City");
echo $person1->getInfo();  // In thông tin của person1
echo "\nCan vote: " . ($person1->canVote() ? 'true' : 'false');  // Kiểm tra xem person1 có thể bỏ phiếu không
?>