<?php

/**
 * phương thức constructor
 * phương thức khởi tạo của class
 * phương thức khởi tạo được tự động gọi
 * khi sử dụng new ClassName();
 */

class Student {

    // method khởi tạo
    function __construct() {
        echo "<br> method __construct tự động chạy";
    }

    public function showInfo() {
        echo "<br> showInfo";
    }

}

$student1 = new Student();
$student1->showInfo();
