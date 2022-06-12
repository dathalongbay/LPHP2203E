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
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
    ?>

    <pre>
        $_REQUEST làm gì ?
        $_REQUEST lấy được dữ liệu từ cả form có method="post"  và
        form có method="get"
        khi chúng ta ko biết form có method là gì dùng $_REQUEST để lấy dữ liệu submit đi
        $_POST chỉ lấy được dữ liệu từ form có method="post"
        $_GET chỉ lấy được dữ liệu từ form có method="get"
    </pre>
    <form name="user" action="" method="get">
        <div>
            <label for="">username</label>
            <input type="text" name="ten_dang_nhap" value="">
        </div>
        <div>
            <label for="">password</label>
            <input type="text" name="mat_khau" value="">
        </div>
        <input type="submit" name="login" value="Đăng nhập">
    </form>
</body>
</html>