<?php
/**
 * giới hạn truy cập
 * public ( công khai ) các method và thuộc tính có kiểu public thì có thể được
 * gọi bên trong chính class đó hoặc class con kế thức từ nó
 * hoặc bên ngoài class
 * đơn giản mọi nơi đều gọi được
 *
 * protected ( áp dụng kế thừa )
 * thuộc tính và phương thức có từ khóa protected thì chỉ có thể truy cập
 * trong chính class đó hoặc class con kế thừa từ nó
 *
 * private ( riêng tư )
 * thuộc tính và phương thức có từ khóa private thì chỉ có thể truy cập
 * bên trong chính bản thân class đó
 * bên ngoài class và trong class con kế thừa không truy cập được
 */


class Demo {

    public $a = 1;
    protected $b = 2;
    private $c = 3;

    public function getProC() {
        echo '<br>' . $this->c;
    }

    protected function getInfo(){
        echo '<br> getInfo protected';
    }

    private function demoPrivate(){
        echo '<br> riêng tư';
    }

    public function abc(){
        $this->demoPrivate();
    }

}

class DemoChild extends Demo {

    public function getB() {
        echo '<br>' . $this->b;
    }

    public function getInfoFromParent() {
        $this->getInfo();
    }

    public function getC() {
        echo '<br>' . $this->c;
    }
}

$demo1 = new Demo();
echo "<br>" . $demo1->a;
echo "<br>" . $demo1->b;
echo "<br>" . $demo1->c;
echo "<br>" . $demo1->getInfo();

