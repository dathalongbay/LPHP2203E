<?php
require_once "index8.php";
require_once "index8b.php";

// dùng từ khóa use để nạp namespace
// dùng từ khóa as để tạo bí danh
use \Dat\demoClass as demoClassA;
use \TuanAnh\demoClass as demoClassB;

$a = new demoClassA();
$a->info();
$b = new demoClassB();
$b->info();