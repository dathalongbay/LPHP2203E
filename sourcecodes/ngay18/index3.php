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
print_r($_POST);
echo "</pre>";
echo "<br> ten dang nhap : " . isset($_POST['ten_dang_nhap']) && !empty($_POST['ten_dang_nhap']) ? $_POST['ten_dang_nhap'] : '';
?>

    <pre>
        get và post
        get khi submit dữ liệu xuất hiện trên url dưới dạng query string ( file.php?key1=val1&key2=val2)
        post thì băm dữ liệu và không nhìn thấy trên url nên nó bảo mật hơn chú ý với form có dữ liệu riêng tư như mật khẩu không bao giờ dùng method = get
        lấy dữ liệu form có method="post" thì dùng $_POST
    </pre>

    <form name="user" action="" method="post">
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