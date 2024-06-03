<?php

// Lớp SinhVien
class SinhVien {
    public $hoTen;
    public $maSinhVien;
    public $diemThi;

    // Constructor để khởi tạo các thuộc tính
    public function __construct($hoTen, $maSinhVien, $diemThi) {
        $this->hoTen = $hoTen;
        $this->maSinhVien = $maSinhVien;
        $this->diemThi = $diemThi;
    }

    // Getters
    public function getHoTen() {
        return $this->hoTen;
    }

    public function getMaSinhVien() {
        return $this->maSinhVien;
    }

    public function getDiemThi() {
        return $this->diemThi;
    }

    // Phương thức xepLoai để trả về xếp loại của sinh viên
    public function xepLoai() {
        if ($this->diemThi >= 9) {
            return "Gioi";
        } elseif ($this->diemThi >= 5) {
            return "Kha";
        } elseif ($this->diemThi >= 5) {
            return "Trung Binh";
        } else {
            return "Yeu";
        }
    }

    // Phương thức để hiển thị thông tin sinh viên
    public function displayInfo() {
        echo "Ho Ten: " . $this->hoTen . "<br>";
        echo "Ma Sinh Vien: " . $this->maSinhVien . "<br>";
        echo "Diem Thi: " . $this->diemThi . "<br>";
        echo "Xep Loai: " . $this->xepLoai() . "<br>";
    }
}

// Lớp SinhVienDaiHoc kế thừa từ lớp SinhVien
class SinhVienDaiHoc extends SinhVien {
    private $nganhHoc;

    // Constructor để khởi tạo các thuộc tính
    public function __construct($hoTen, $maSinhVien, $diemThi, $nganhHoc) {
        parent::__construct($hoTen, $maSinhVien, $diemThi);
        $this->nganhHoc = $nganhHoc;
    }

    // Getter cho nganhHoc
    public function getChuyenNganh() {
        return $this->nganhHoc;
    }

    // Ghi đè phương thức xepLoai để thêm điều kiện đặc biệt
    public function xepLoai() {
        if ($this->diemThi >= 9.5 && $this->nganhHoc === "Công nghệ thông tin") {
            return "Xuất sắc";
        }
        return parent::xepLoai();
    }

    // Phương thức để hiển thị thông tin sinh viên
    public function displayInfo() {
        parent::displayInfo();
        echo "Nganh Hoc: " . $this->nganhHoc . "<br>";
    }
}

// Lớp SinhVienCaoDang kế thừa từ lớp SinhVien
class SinhVienCaoDang extends SinhVien {
    private $khoaHoc;

    // Constructor để khởi tạo các thuộc tính
    public function __construct($hoTen, $maSinhVien, $diemThi, $khoaHoc) {
        parent::__construct($hoTen, $maSinhVien, $diemThi);
        $this->khoaHoc = $khoaHoc;
    }

    // Getter cho khoaHoc
    public function getKhoaHoc() {
        return $this->khoaHoc;
    }

    // Ghi đè phương thức xepLoai để thêm điều kiện đặc biệt
    public function xepLoai() {
        if ($this->diemThi >= 8.5 && $this->khoaHoc === "Nhóm ngành kỹ thuật") {
            return "Giỏi";
        }
        return parent::xepLoai();
    }

    // Phương thức để hiển thị thông tin sinh viên
    public function displayInfo() {
        parent::displayInfo();
        echo "Khoa Hoc: " . $this->khoaHoc . "<br>";
    }
}

// Lớp SinhVienChinhQuy kế thừa từ lớp SinhVienDaiHoc
class SinhVienChinhQuy extends SinhVienDaiHoc {
    // Constructor để khởi tạo các thuộc tính
    public function __construct($hoTen, $maSinhVien, $diemThi, $nganhHoc) {
        parent::__construct($hoTen, $maSinhVien, $diemThi, $nganhHoc);
    }

    // Phương thức để hiển thị thông tin sinh viên
    public function displayInfo() {
        parent::displayInfo();
        echo "Sinh vien chinh quy<br>";
    }
}

// Tạo một số đối tượng SinhVienDaiHoc và SinhVienCaoDang
$sinhVienDaiHoc = new SinhVienDaiHoc("Nguyen Van A", "SV001", 9.6, "Công nghệ thông tin");
$sinhVienCaoDang = new SinhVienCaoDang("Tran Thi B", "SV002", 8.6, "Nhóm ngành kỹ thuật");

// In ra thông tin của các đối tượng sinh viên
$sinhVienDaiHoc->displayInfo();
echo "<br>";
$sinhVienCaoDang->displayInfo();
echo "<br>";

// Tạo một đối tượng SinhVienChinhQuy
$sinhVienChinhQuy = new SinhVienChinhQuy("Le Thi C", "SV003", 9.2, "Quản trị kinh doanh");

// In ra thông tin của đối tượng SinhVienChinhQuy
$sinhVienChinhQuy->displayInfo();

?>