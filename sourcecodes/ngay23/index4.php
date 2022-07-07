<?php
// extends hỗ trợ đơn kế thừa
// class ClassA extends classB {}
// từ khóa extends chỉ cho phép kế thừa 1 - 1

// nếu muốn đa kế thừa
// trait hỗ trợ đa kế thừa

trait traitNameA {

    // cũng có thuộc tính
    // cũng có method
}

trait traitNameB {

    // cũng có thuộc tính
    // cũng có method
}

class classD {

    // đa kế thừa
    use traitNameA,traitNameB;

}

