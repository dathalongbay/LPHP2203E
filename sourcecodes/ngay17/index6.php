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
       em hay viết vòng lặp thay thế các giá trị tên thành phố và tên quận
        thành chữ viết hoa
        ví dụ : hà nội => HÀ NỘI
        gợi ý gán lại mảng đa chiều $tenMang[keyCap1][keyCap2] = giá trị mới
    </pre>

    <?php
    $cities = [];
    $cities["hn"] = ["ten" => "hà nội", "quan" => ["tây hồ", "hoàn kiếm", "hai bà trưng"]];
    $cities["hcm"] = ["ten" => "hồ chí minh", "quan" => ["quận 1", "thủ đức", "quận 7"]];
    $cities["dn"] = ["ten" => "đà nẵng", "quan" => ["liên chiểu", "hải châu"]];

    echo "<pre>";
    print_r($cities);
    echo "</pre>";


    ?>

</body>
</html>