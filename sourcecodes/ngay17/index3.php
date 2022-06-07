<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <pre>
        mảng trong php chia làm 3 loại mảng :
        1 - mảng chỉ số : các index đều là số ( index trong mảng bắt đầu từ 0 )
        2 - mảng kết hợp : các index có ít nhất 1 index là chuỗi
        3 - mảng lồng mảng
    </pre>

    <?php
    $cities = ["hà nội", "hồ chí minh", "đà nẵng"];
    var_dump($cities);
    echo "<pre>";
    print_r($cities);
    echo "</pre>";

    $students = [];
    // gán các phần từ cho nó
    $students[0] = "nguyen van a";
    $students[1] = "nguyen van b";
    $students[2] = "nguyen van c";

    // cách 3
    $cars = [];
    $cars[] = "vinfast";
    $cars[] = "toyota";
    $cars[] = "honda";

    // cách 4
    $mobiles = [0 => "apple", 1 => "samsung", 2 => "oppo"];

    // trong php 7 dùng [] khai báo mảng
    // với php nhờ 7 trước đây
    $laptops = array("sony", "asus", "acer");
    $laptops = array(0=>"sony", 1=>"asus", 2=>"acer");
    ?>

</body>
</html>