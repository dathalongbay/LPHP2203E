<?php
class Demo {

    // khai báo thuộc tính tĩnh static
    public static $a = 123;

    // khai báo method tĩnh
    public static function methodA(){
        echo "<br> methodA";
    }

}
// bình thường dùng object thông qua từ new khi tạo ra đối tượng từ class
// để truy cập vào thuộc tính và method của class đó
// $object = new Demo();

echo "<br>". Demo::$a;
echo "<br>". Demo::methodA();