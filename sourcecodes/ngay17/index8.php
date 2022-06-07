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
        mảng lồng mảng
        mỗi phần tử bên trong của nó lại là 1 mảng
    </pre>

    <?php
    $cities = [];
    $cities["hn"] = ["ten" => "ha noi", "quan" => ["tây hồ", "hoàn kiếm", "hai bà trưng"]];
    $cities["hcm"] = ["ten" => "hồ chí minh", "quan" => ["quận 1", "thủ đức", "quận 7"]];
    $cities["dn"] = ["ten" => "đà nẵng", "quan" => ["liên chiểu", "hải châu"]];

    echo "<pre>";
    print_r($cities);
    echo "</pre>";

    // duyệt mảng đa chiều
    echo "<ul>";
    foreach ($cities as $indexCity => $city) {

        $cities[$indexCity]['ten'] = strtoupper($city['ten']);

        foreach ($city['quan'] as $indexDistrict => $district) {
        /*    echo "<pre>";
            print_r( $cities[$indexCity]['quan'][$indexDistrict]);
            echo "</pre>";*/
             // exit; die;
            $cities[$indexCity]['quan'][$indexDistrict] = strtoupper($district);

        }

    }

    echo "<h1>sau khi chạy xong vòng lặp</h1>";
    echo "<pre>";
    print_r($cities);
    echo "</pre>";
    ?>

</body>
</html>