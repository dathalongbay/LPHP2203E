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
        vòng lặp trong php 
        for , while ,do while giống js 
        break trong vòng lặp giống js 
        continue trong vòng lặp giống js
    </pre>

    <?php 
    $a = 5;
    $b = 25;
    // in ra tổng các số từ $a đến $b
    // 5 + 6 + 7 + 8 + ... + 25
    // in ra tích các số từ $a đến $b
    // 5 * 6 * 7 * 8 * ... * 25
    ?>

    <?php
    $tong = 0;
    $tich = 1;
    for($i = $a; $i <= $b;$i++) {
        echo "<p>$i</p>";
        $tong = $tong + $i;
        // $tong += $i;
        $tich = $tich * $i;
        // $tich *= $i;
        

    }

    echo "<br> Tổng : " . $tong;
    echo "<br> Tích : " . $tich;

    ?>


</body>
</html>
