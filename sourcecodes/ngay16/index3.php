<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        biến trong php 
        bắt đầu bằng dấu $ 
        vd $a $b 
    </pre>

    <?php
    // chú thích 1 dòng trong php

    /* 
    chú thích nhiều dòng trong php
     */

     $a = 5;
     $b = 1;

     // khác với js dùng dấu + để nối chuỗi 
     // php dùng dấu . để nối chuỗi
     echo "<br> tổng : " . ($a + $b);
     echo "<br> hiệu : " . ($a - $b);
     echo "<br> tích : " . ($a * $b);
     echo "<br> thương : " . ($a / $b);
     echo "<br> chia lấy dư : " . ($a % $b);
    
    ?>
</body>
</html>