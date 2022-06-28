<?php

class Student { // ngoặc nhọn mở của class

    /**
     * khai báo các thuộc tính
     * thuộc tính = properties là đặc điểm tính chất của 1 đối tượng
     * trước tên thuộc tính dùng các từ khóa ( public/private/protected chỉ ra giới hạn truy cập của thuộc tính đó )
     */
    public $name = '';
    public $age = 0;
    public $address;
    private $username;

    /*
     * phương thức trong class
     * tương đối giống hàm function nhưng là các function nằm trong class
     * hàm thì nằm ngoài class
     * cách viết thì method và function đều giống nhau
     * trước tên method dùng các từ khóa ( public/private/protected chỉ ra giới hạn truy cập của method đó )
     * */
    public function setInfo($name, $age, $address) {
        // trong method để truy cập vào class
        // thì chúng ta dùng từ khóa $this
        // $this có nghĩa là chính bản thân class
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    public function getInfo() {
        echo "<br> Tên : " . $this->name;
        echo "<br> Tuổi : " . $this->age;
        echo "<br> Địa chỉ : " . $this->address;
    }

} // ngoặc nhọn kết thúc của class

// tạo ra các object từ class này
// new ClassName() : cú pháp tạo objec từ class
$student1 = new Student();
$student1->setInfo('nguyen van an', 21, 'băc ninh');
$student1->getInfo();

// bên ngoài class gọi đến các thuộc tính public
echo "<br> tên ngoài class : " . $student1->name;
echo "<br> tuổi ngoài class : " . $student1->age;

$student2 = new Student();
$student2->setInfo('nguyễn hương', 22, 'hà nội');
$student2->getInfo();

// class giống như khuôn mẫu và trừu tượng
// object cụ thể
// class XeHonda Lead
// object Xe có biển số 30A - 12345
// class ConMeo
// object ConMeo có lông đen , ConMeo có lông trắng
