<?php
namespace Dat;

function demo() {
    echo "<br> ABC";
}

class demoClass {
    public $a = 1;
    public function info() {
        echo "<br>". $this->a;
    }
}
