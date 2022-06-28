<?php

/**
 * phương thức khởi tạo có tham số đầu vào
 */

class Student {

    public $name = '';
    public $age = 0;
    public $address;

    public function __construct($ten, $tuoi, $diaChi)
    {
        $this->name = $ten;
        $this->age = $tuoi;
        $this->address = $diaChi;
    }

    public function getInfo() {
        echo "<br> Tên : " . $this->name;
        echo "<br> Tuổi : " . $this->age;
        echo "<br> Địa chỉ : " . $this->address;
    }

}

// truyền tham số cho method khởi tạo khi dùng từ khóa new ClassName()
$student1 = new Student('nguyen van an', 21, 'hà nội');