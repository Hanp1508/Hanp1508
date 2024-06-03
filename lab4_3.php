<?php

// Giao diện PersonInterface
interface PersonInterface {
    public function getName();
    public function getAge();
    public function getInfo();
}

// Trait ComparableTrait để so sánh tuổi của hai đối tượng Person
trait ComparableTrait {
    public function compareTo($other) {
        if ($this->getAge() < $other->getAge()) {
            return -1;
        } elseif ($this->getAge() > $other->getAge()) {
            return 1;
        } else {
            return 0;
        }
    }
}

// Lớp Student thực thi giao diện PersonInterface
class Student implements PersonInterface {
    use ComparableTrait;

    private $name;
    private $age;
    private $studentId;
    public static $totalStudents = 0;

    // Constructor để khởi tạo các thuộc tính
    public function __construct($name, $age, $studentId) {
        $this->name = $name;
        $this->age = $age;
        $this->studentId = $studentId;
        self::$totalStudents++;
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

    // Phương thức tĩnh để lấy tổng số học sinh
    public static function getTotalStudents() {
        return self::$totalStudents;
    }
}

// Lớp Teacher thực thi giao diện PersonInterface
class Teacher implements PersonInterface {
    use ComparableTrait;

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
$student1 = new Student("Nguyen Van A", 20, "SV001");
$student2 = new Student("Le Thi C", 22, "SV002");

// Tạo đối tượng Teacher và hiển thị thông tin
$teacher1 = new Teacher("Tran Thi B", 35, "GV001");
$teacher2 = new Teacher("Nguyen Van D", 40, "GV002");

// Tạo một mảng chứa cả học sinh và giáo viên
$people = [$student1, $student2, $teacher1, $teacher2];

// Hàm để hiển thị thông tin của tất cả học sinh và giáo viên trong mảng
function displayPeopleInfo($people) {
    foreach ($people as $person) {
        echo $person->getInfo() . "<br>";
    }
}

// Hàm để sắp xếp mảng theo tuổi của các đối tượng
function sortByAge($people) {
    usort($people, function($a, $b) {
        return $a->compareTo($b);
    });
    return $people;
}

// Hiển thị thông tin của tất cả học sinh và giáo viên trong mảng trước khi sắp xếp
echo "Before sorting:<br>";
displayPeopleInfo($people);

// Sắp xếp mảng theo tuổi và hiển thị lại thông tin
$people = sortByAge($people);
echo "<br>After sorting:<br>";
displayPeopleInfo($people);

// Hiển thị tổng số học sinh đã được tạo
echo "<br>Total students: " . Student::getTotalStudents() . "<br>";

?>