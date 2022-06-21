<?php session_start(); ?>
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
        cookie lưu trên máy khách
        session lưu trên máy chủ
        session hiểu đơn giản là phiên làm việc
        session ID là ID phiên làm việc và nó là duy nhất để phân biệt người dùng
        muốn dùng session phải đặt hàm session_start() ở đầu file
    </pre>

    <?php
    $_SESSION["username"] = "nguyen tuan anh";
    $_SESSION["email"] = "tuananh@gmail.com";
    ?>

    <a href="getsession.php">Xem session ở 1 file khác</a>

</body>
</html>