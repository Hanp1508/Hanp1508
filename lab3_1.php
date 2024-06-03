<?php

// Lớp Employee
class Employee {
    public $id;
    public $name;
    public $salary;

    // Constructor để khởi tạo các thuộc tính
    public function __construct($id, $name, $salary) {
        $this -> id = $id;
        $this -> name = $name;
        $this -> salary = $salary;
    }

    // Getters và Setters
    public function getId() {
        return $this -> id;
    }

    public function setId($id) {
        $this -> id = $id;
    }

    public function getName() {
        return $this -> name;
    }

    public function setName($name) {
        $this -> name = $name;
    }

    public function getSalary() {
        return $this -> salary;
    }

    public function setSalary($salary) {
        $this -> salary = $salary;
    }

    // Phương thức calculateSalary để tính lương của nhân viên
    public function calculateSalary() {
        return $this -> salary;
    }
}

// Lớp Manager kế thừa từ lớp Employee
class Manager extends Employee {
    private $bonus;

    // Constructor để khởi tạo các thuộc tính, bao gồm cả tiền thưởng
    public function __construct($id, $name, $salary, $bonus) {
        parent::__construct($id, $name, $salary);
        $this -> bonus = $bonus;
    }

    // Getters và Setters cho bonus
    public function getBonus() {
        return $this -> bonus;
    }

    public function setBonus($bonus) {
        $this -> bonus = $bonus;
    }

    // Ghi đè phương thức calculateSalary để tính lương của quản lý
    public function calculateSalary() {
        return $this -> salary + $this -> bonus;
    }
}

// Ví dụ sử dụng
$employee = new Employee(1, "John Doe", 50000);
echo "Employee Salary: " . $employee -> calculateSalary() . "\n";

$manager = new Manager(2, "Jane Smith", 70000, 15000);
echo "Manager Salary: " . $manager -> calculateSalary() . "\n";
?>