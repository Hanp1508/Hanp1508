<?php

namespace Company;

class Employee {
    private $employeeCode;
    private $employeeName;
    private $basicSalary;
    private $allowance;
    private $department;

    public function __construct($employeeCode = "", $employeeName = "", $basicSalary = 0, $allowance = 0, $department = "") {
        $this->employeeCode = $employeeCode;
        $this->employeeName = $employeeName;
        $this->basicSalary = $basicSalary;
        $this->allowance = $allowance;
        $this->department = $department;
    }

    // Getter và Setter cho các thuộc tính
    public function getEmployeeCode() {
        return $this->employeeCode;
    }

    public function setEmployeeCode($employeeCode) {
        $this->employeeCode = $employeeCode;
    }

    public function getEmployeeName() {
        return $this->employeeName;
    }

    public function setEmployeeName($employeeName) {
        $this->employeeName = $employeeName;
    }

    public function getBasicSalary() {
        return $this->basicSalary;
    }

    public function setBasicSalary($basicSalary) {
        $this->basicSalary = $basicSalary;
    }

    public function getAllowance() {
        return $this->allowance;
    }

    public function setAllowance($allowance) {
        $this->allowance = $allowance;
    }

    public function getDepartment() {
        return $this->department;
    }

    public function setDepartment($department) {
        $this->department = $department;
    }

    // Phương thức tính toán lương
    public function calculateSalary() {
        return $this->basicSalary + $this->allowance;
    }

    // Phương thức hiển thị thông tin nhân viên
    public function getInfo() {
        echo "Employee Code: {$this->employeeCode}\n";
        echo "Employee Name: {$this->employeeName}\n";
        echo "Department: {$this->department}\n";
        echo "Basic Salary: {$this->basicSalary}\n";
        echo "Allowance: {$this->allowance}\n";
        echo "Total Salary: {$this->calculateSalary()}\n";
    }
}

// Sử dụng lớp Employee
$employee = new Employee("EMP001", "John Doe", 5000, 500, "HR");
$employee->getInfo();
?>