<?php
class Employee {
    public string $name;
    public int $age;
    public float $salary;
    public string $department;

    public function __construct(
        string $name = "Unknown",
        int $age = 0,
        float $salary = 0,
        string $department = "Unassigned"
    ) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
        $this->department = $department;
    }

    // Getter và setter cho tất cả các thuộc tính
    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function setAge(int $age): void {
        $this->age = $age;
    }

    public function getSalary(): float {
        return $this->salary;
    }

    public function setSalary(float $salary): void {
        $this->salary = $salary;
    }

    public function getDepartment(): string {
        return $this->department;
    }

    public function setDepartment(string $department): void {
        $this->department = $department;
    }

    // Phương thức hiển thị thông tin đầy đủ của nhân viên
    public function displayInfo(): void {
        echo "Name: $this->name, Age: $this->age, Salary: $this->salary, Department: $this->department\n";
    }
}

// Tạo đối tượng "employee1" sử dụng constructor property promotion
$employee1 = new Employee(name: "John", age: 30, salary: 5000, department: "IT");
$employee1->displayInfo(); // Hiển thị thông tin đầy đủ về "employee1"

// Tạo đối tượng "employee2" bằng cách sử dụng constructor mặc định
$employee2 = new Employee();
// Sử dụng các phương thức setter để thiết lập giá trị cho "employee2"
$employee2->setName("Alice");
$employee2->setAge(25);
$employee2->setSalary(4000);
$employee2->setDepartment("HR");

$employee2->displayInfo(); // Hiển thị thông tin đầy đủ về "employee2"
?>
