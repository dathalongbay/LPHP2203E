<?php
// namespace => không gian tên
// => trong 1 lớp có 2 bạn Nguyễn thị tâm
// Nguyễn thị tâm A , Nguyễn thị tâm B
// phát sinh 2 class hay 2 function trùng tên nhau
// dùng giải pháp namespace
class DemoA {
    public $a = 1;
}

class DemoA {
    public $b = 2;
}

function demoB() {
    echo "b";
}

function demoB() {
    echo "c";
}