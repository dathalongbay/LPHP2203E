<?php
namespace MVC\Models;
// global namespace = không gian tên toàn cục
class Connect {

    public $pdo;

    public function __construct()
    {
        $host = 'localhost:3308'; // 127.0.0.1
        // port mặc định mysql : 3306
        $db = 'bookdb'; // tên cơ sở dữ liệu
        $user = 'root'; // username kết nối mysql
        $password = ''; // mật khẩu kết nối mysql

        $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

        try {
            // biến chứa kết nối csdl là biến $pdo
            $this->pdo = new \PDO($dsn, $user, $password);

            if ($this->pdo) {
                //echo "kết nối thành công !";
            }
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

}
