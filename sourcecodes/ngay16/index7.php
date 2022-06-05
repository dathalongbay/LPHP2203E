<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    kiểu số thực 3.14 
    kiểu null 
    kiểu object (giới thiệu qua)
    </pre>

    <?php 
    $a = 3.14;
    // kiểm tra kiểu dữ liệu và giá trị
    var_dump($a);
    echo "<br>";
    // null có nghĩa là không có giá trị gì cả 
    $b = null;
    var_dump($b);
    // kiểu object 
    class Student {

        // thuộc tính
        public $name = "thuy linh";
        public $age = 21;

        // phương thức 
        public function showInfo() {
            echo "<br>tên sinh viên : " . $this->name;
            echo "<br>tuổi sinh viên " . $this->age;
        }
    }

    // khởi tạo object từ class bên trên 
    $person = new Student();
    // không echo được object 
    echo "<br>";
    var_dump($person);
    // cách 2
    echo "<pre>";
    print_r($person);
    echo "</pre>";
    ?>

</body>
</html>