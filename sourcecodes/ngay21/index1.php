<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        form span {
            display: block;
            font-size: 10px;
            color: orange;
        }
    </style>
</head>
<body>

    <?php
    if (!empty($_POST)) {

    }
    ?>

    <div>
        <h1>https://regex101.com/</h1>
        <form action="" name=dang_ky" method="post">
            <p>
                <label>Họ tên *</label>
                <span>Họ tên phải từ 2 từ đến 5 từ</span>
                <input type="text" name="hoten" value="">
            </p>

            <p>
                <label>Email *</label>
                <span>tenEmail@domain ( từ 12 đến 64 ký tự)</span>
                <input type="email" name="email" value="">
            </p>

            <p>
                <label>Số điện thoại *</label>
                <span>Số phone từ 10 đến 11 số</span>
                <input type="text" name="so_dien_thoai" value="">
            </p>

            <p>
                <label>Sinh nhật</label>
                <span>dd/mm/YYYY vd 02/10/1995</span>
                <input type="text" name="sinh_nhat" value="">
            </p>

            <p>
                <label>Ghi chú</label>
                <span>Từ 8 đến 200 từ</span>
                <textarea name="ghi_chu" id="ghi_chu" cols="30" rows="10"></textarea>
            </p>

            <p>
                <input type="submit" name="send" value="Đăng ký">
            </p>

        </form>
    </div>

</body>
</html>