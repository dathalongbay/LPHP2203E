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
        các kiểu dữ liệu trong php
    </pre>

    <?php 
    // chuỗi 
    $a = "hà nội";
    echo "<br>" . $a;
    // số 
    $b = 21;
    $c = -18;
    echo "<br>" . $b;
    // boolean 
    $d = true;
    $e = false;
    echo "<br>" . $d;
    // không in được chính xác kiểu boolean 
    // mà dùng hàm var_dump();
    echo "<br>";
    var_dump($d);
    echo "<br>";
    var_dump($e);
    ?>
</body>
</html>