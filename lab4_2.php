<?php

// Giao diện PersonInterface
interface PersonInterface {
    public function getName();
    public function getAge();
    public function getInfo();
}

// Lớp Student thực thi giao diện PersonInterface
class Student implements PersonInterface {
    private $name;
    private $age;
    private $studentId;

    // Constructor để khởi tạo các thuộc tính
    public function __construct($name, $age, $studentId) {
        $this->name = $name;
        $this->age = $age;
        $this->studentId = $studentId;
    }

    // Getters và Setters cho các thuộc tính
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getStudentId() {
        return $this->studentId;
    }

    public function setStudentId($studentId) {
        $this->studentId = $studentId;
    }

    // Phương thức getInfo để trả về thông tin đầy đủ của học sinh
    public function getInfo() {
        return "Student Name: " . $this->name . ", Age: " . $this->age . ", Student ID: " . $this->studentId;
    }
}

// Lớp Teacher thực thi giao diện PersonInterface
class Teacher implements PersonInterface {
    private $name;
    private $age;
    private $teacherId;

    // Constructor để khởi tạo các thuộc tính
    public function __construct($name, $age, $teacherId) {
        $this->name = $name;
        $this->age = $age;
        $this->teacherId = $teacherId;
    }

    // Getters và Setters cho các thuộc tính
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getTeacherId() {
        return $this->teacherId;
    }

    public function setTeacherId($teacherId) {
        $this->teacherId = $teacherId;
    }

    // Phương thức getInfo để trả về thông tin đầy đủ của giáo viên
    public function getInfo() {
        return "Teacher Name: " . $this->name . ", Age: " . $this->age . ", Teacher ID: " . $this->teacherId;
    }
}

// Tạo đối tượng Student và hiển thị thông tin
$student = new Student("Nguyen Van A", 20, "SV001");
echo $student->getInfo() . "<br>";

// Tạo đối tượng Teacher và hiển thị thông tin
$teacher = new Teacher("Tran Thi B", 35, "GV001");
echo $teacher->getInfo() . "<br>";

// Tạo một mảng chứa cả học sinh và giáo viên
$people = [$student, $teacher];

// Hàm để hiển thị thông tin của tất cả học sinh và giáo viên trong mảng
function displayPeopleInfo($people) {
    foreach ($people as $person) {
echo $person->getInfo() . "<br>";
    }
}

// Hiển thị thông tin của tất cả học sinh và giáo viên trong mảng
displayPeopleInfo($people);

?>