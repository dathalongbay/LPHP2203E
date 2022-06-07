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
    <pre>duyệt mảng chỉ số</pre>

    <?php
    $cars = [];
    $cars[] = "vinfast";
    $cars[] = "toyota";
    $cars[] = "honda";

    echo "<ul>";
    echo "<li>".$cars[0]."</li>";
    echo "<li>".$cars[1]."</li>";
    echo "<li>".$cars[2]."</li>";
    echo "</ul>";

    // độ dài mảng count($cars)

    if (is_array($cars) && count($cars)) {
        echo "<ul>";
        for ($i = 0; $i < count($cars); $i++) {
            echo "<li>$cars[$i]</li>";
        }
        echo "</ul>";
    }

    // ! phủ đinh
    if (is_array($cars) && !empty($cars)) {
        echo "<ul>";
        for ($i = 0; $i < count($cars); $i++) {
            echo "<li>$cars[$i]</li>";
        }
        echo "</ul>";
    }

    $a = false;
    if ($a) { // $a == true hoặc $a > 0 thì mới chạy vào if
        echo "giá trị $a";
    }

    if (!$a) { // ! phủ đinh ngược ( a == false ) hoặc a == 0 hoặc a == null hoặc a == '' thì mới chạy vào bên trong
        echo "giá trị $a với !";
    }



    ?>
</body>
</html>