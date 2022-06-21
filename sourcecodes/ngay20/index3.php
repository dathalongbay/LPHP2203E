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
    <?php
    setcookie("keyword", "dien thoai", time()+30*24*60*60);
    setcookie("ten_nguoi_dung", "tuan anh", time()+30*24*60*60);

    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";
    echo "<br>In cookie : " . $_COOKIE['keyword'];

    // xoa cookie
    setcookie("ten_nguoi_dung", "", time()-24*60*60);

    //  cap nhat cookie
    setcookie("keyword", "tivi", time()+30*24*60*60);
    ?>
</body>
</html>