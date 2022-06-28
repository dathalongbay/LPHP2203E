<?php


try {
    $a = 5;
    $b = 0;
    $c = $a/$b;
    echo "<br>" . $c;
} catch(Exception $e) {
    // xử lý ngoại lệ
}