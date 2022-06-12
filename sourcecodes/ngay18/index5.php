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
    trong thời gian chúng ta 2 loại
    - loại 1 : human time ( người đọc được) nhìn vào biết được đó là ngày giờ bao nhiều ví dụ : 2022-1-1 12:24:00 chỉ có ý nghĩa hiển thị
    - loại 2 : timestamp ( tính toán ) cộng trừ được ( mili giây tính từ 1.1.1970 )
    1 giây = 1000 ms
</pre>
    <?php
    // lấy ra thời gian hiện tại
    $d = date("d/m/Y H:i:s");
    $d1 = date("d-m-Y H:i:s");
    $d2 = date("Y-m-d H:i:s");
    $d3 = date("Y-m-d");
    $d4 = date("H:i:s");
    echo "<br>";
    var_dump($d);
    echo "<br>";
    var_dump($d1);
    echo "<br>";
    var_dump($d2);
    echo "<br>";
    var_dump($d3);
    echo "<br>";
    var_dump($d4);

    // in ra thời gian hiện tại theo timestamp
    $now = time();
    echo "thoi gian hien tai timestamp : " . time();
    ?>
</body>
</html>