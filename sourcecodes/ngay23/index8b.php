<?php
namespace TuanAnh;

function demo() {
    echo "<br> DEF";
}

class demoClass {
    public $b = 2;
    public function info() {
        echo "<br>". $this->b;
    }
}