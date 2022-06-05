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
        kiểu mảng
    </pre>
    <?php 
    $cities = array("hà nội", "hồ chí minh", "đà nẵng");
    // lệnh echo ko in được mảng 
    echo "<br>" . $cities;

    // dùng var_dump ( khó nhìn cấu trúc)
    echo "<br>";
    var_dump($cities);

    // dùng hàm print_r kết hợp với thẻ pre của html để xem cấu trúc mảng 
    echo "<pre>";
    print_r($cities);
    echo "</pre>";
    ?>
</body>
</html>