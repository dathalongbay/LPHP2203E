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
        json_encode() chuyển mảng hay object trong php thành định dạng json
        json_decode() chuyển json thành mảng hay object
    </pre>

    <?php
    $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

    $json = json_encode($age);
    echo "<br>" . $json;

    $revert = json_decode($json);
    // đôi số thứ 2 json_decode có chuyên json thành mảng kết hợp hay không
    // mặc định là false
    $revert2 = json_decode($json, true);

    echo "<pre>";
    print_r($revert);
    echo "</pre>";

    echo "<pre>";
    print_r($revert2);
    echo "</pre>";


    ?>
</body>
</html>