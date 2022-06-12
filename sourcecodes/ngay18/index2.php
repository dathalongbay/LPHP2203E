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
    print_r($_GET);
    echo "</pre>";
    ?>
    <pre>
        action : đích đến của form khi ấn submit
        action mà là rỗng thì nó sẽ gửi dữ liệu đến chính url hiện tại
        method : phương thức gửi data có 2 loại post & get

        form có method là get thì nó sẽ submit dữ liệu xuất hiện trên url
        dưới dạng query string
        index1.php?ten_dang_nhap=abc&mat_khau=123&login=Đăng+nhập
        domain?key1=val1&key2=val2&key3=val3
        sau dấu ? người ta gọi nó là query string
        dùng $_GET để lấy dữ liệu từ form có method="get"
        $_GET trả ra 1 mảng với key của mảng là tên của các ô input/texarea trong form
    </pre>
    <form name="user" action="target.php" method="get">
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