<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <pre>
        class và phương thức trừu tượng
        - class trừu tượng cần có ít nhất 1 method trừu tượng
        - class và method trừu tượng dùng từ khóa abstract
        - method trừu tượng trong class cha chỉ có phần khai báo tên method
        mà không có code thực thi
        - class con extends class cha trừu tượng phải đi thực thi tất cả
        method trừu tượng của class cha

        * Trong thực tế
        abstract class Database {
            abstract public function connect();
            abstract public function read();
            abstract public function write();
            abstract public function disconnect();
        }

        class ConnectMysql extends Database {
            public function connect(){
                // code connect mysql
            }
        }

        class ConnectMsAccess extends Database {
            public function connect(){
                // code connect ms access
            }
        }

        // giống excel
        class ConnectGgSheet extends Database {
            public function connect(){
                // code connect GgSheet
            }
        }

    </pre>

    <?php
    abstract class DongVat {
        abstract public function an();
        abstract public function diChuyen();
        abstract public function keu();
        abstract public function sinhSan();

        // method thông thường
        public function getInfo(){
            echo "<br> động vật thì di chuyển";
        }
    }

    class Meo extends DongVat {

        public function an(){
            echo "<br> mèo ăn chuột";
        }

        public function diChuyen(){
            echo "<br> mèo biết chạy nhảy";
        }

        public function keu(){
            echo "<br> meo meo";
        }

        public function sinhSan(){
            echo "<br> meo sinh con 2 lứa 1 năm";
        }
    }

    class Ca extends DongVat {


        public function an(){
            echo "<br> cá ăn tảo tạp ...";
        }

        public function diChuyen(){
            echo "<br> bơi";
        }

        public function keu(){
            echo "<br> ko kêu";
        }

        public function sinhSan(){
            echo "<br> cá có thể đẻ trứng hoặc con";
        }
    }


    ?>
</body>
</html>