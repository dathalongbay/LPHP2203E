<?php

class DienThoaiCoDien {

    public $numberPhone = 12345;

    public function goiDien(){
        echo "<br> gọi điện";
    }
    public function ngheDien(){
        echo "<br> nghe điện";
    }
}

trait Computer {

    public $ip = '127.0.0.1';

    public function sendEmail() {
        echo "<br> sendEmail";
    }

    public function playGame() {
        echo "<br> playGame";
    }

    public function office() {
        echo "<br> office";
    }
}

trait Ipod {

    public function ngheNhac() {
        echo "<br> ngheNhac";
    }
}

class SmartPhone extends DienThoaiCoDien{

    use Computer;
    use Ipod;
}

$sony = new SmartPhone();
$sony->goiDien();
$sony->ngheNhac();
$sony->playGame();

