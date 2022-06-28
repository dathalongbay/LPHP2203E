<?php
// throw new Exception("Division by zero");
// throw ném ngoại lệ
// new Exception() là object của class Exception
// truyền vào new Exception('message')

try {
    $a = 5;
    $b = 0;
    if ($b == 0 ) {
        throw new Exception("Không được phép chia cho số 0");
    }
    $c = $a/$b;
    echo "<br>" . $c;
} catch(Exception $e) {
    // xử lý ngoại lệ
    // method của $e
    echo "<br>" . $e->getMessage();
    echo "<br>" . $e->getLine();
    echo "<br>" . $e->getFile();
} finally {
    // code that always runs regardless of whether an exception was caught
    // code sẽ chạy bất kể ngoại lệ có xảy ra hay không
    echo "<br> đoạn code chạy trong finally";
}

