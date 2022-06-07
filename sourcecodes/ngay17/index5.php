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
        mảng kết hợp có ít nhất 1 index không phải số mà là chuỗi
    </pre>

    <?php
    $cities1 = ["hn" => "hà nội", "hcm" => "hồ chí minh", "dn" => "đà nẵng"];

    $cities2 = [];
    $cities2["hn"] = "hà nội";
    $cities2["hcm"] = "hồ chí minh";
    $cities2["dn"] = "đà nẵng";

    echo "<pre>";
    print_r($cities2);
    echo "</pre>";

    // vòng lặp js không có foreach
    echo "<ul>";
    foreach ($cities2 as $index => $value) {
        echo "<li>".$index . " - " . $value ."</li>";
    }
    echo "</ul>";

    // dạng rút gọn
    echo "<ul>";
    foreach ($cities2 as $value) {
        echo "<li>" . $value ."</li>";
    }
    echo "</ul>";
    ?>


</body>
</html>