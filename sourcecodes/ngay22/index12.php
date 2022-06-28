<?php

/**
 * method hủy của class sẽ tự động chạy khi script php kết thúc
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

    function __destruct()
    {
        echo "<br> hàm hủy được gọi";
        $this->name = '';
        $this->age = '';
        $this->address = '';
    }

}

$student1 = new Student('nguyen van an', 21, 'hà nội');

echo "<br> dòng 1";
echo "<br> dòng 2";
echo "<br> dòng 3";
echo "<br> script php kết thúc do tôi không viết gì nữa";

