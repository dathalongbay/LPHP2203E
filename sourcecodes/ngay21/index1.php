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

        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        $errors = [];
        if (!isset($_POST['hoten'])) {
            $errors['hoten'] = "Chưa nhập họ tên";
        } else {
            $regexHoten = '/^([a-z]{2,7}){1}( [a-z]{2,7}){1,4}$/';
            $stringHoten = $_POST['hoten'];
            if (!preg_match($regexHoten, $stringHoten)) {
                $errors['hoten'] = "Họ tên không hợp lệ";
            }
        }

        if (!isset($_POST['email'])) {
            $errors['email'] = "Chưa nhập email";
        } else {
            $regexEmail = '/^[a-zA-Z0-9_\.]{5,32}@[a-zA-Z0-9_\.]{6,32}$/';
            $stringEmail = $_POST['email'];
            if (!preg_match($regexEmail, $stringEmail)) {
                $errors['email'] = "email không hợp lệ";
            }
        }

        if (count($errors)) {
            // chuyên mảng errors sang chuỗi
            $errorNotice = implode("<br>", $errors);
            echo "<div style='color:red'>".$errorNotice."</div>";
        } else {
            echo "<div style='color:green'>Dữ liệu hợp lệ</div>";
        }

    }
    ?>

    <div>
        <h1>https://regex101.com/</h1>
        <h1>https://www.tutorialrepublic.com/javascript-tutorial/javascript-regular-expressions.php</h1>
        <form action="" name="dang_ky" method="post">
            <p>
                <label>Họ tên *</label>
                <span>Họ tên phải từ 2 từ đến 5 từ . tên là chữ không có số và không có ký tự đặc biệt như @ ! ...</span>
                <input type="text" name="hoten" value="<?php echo isset($_POST['hoten']) ? $_POST['hoten'] : '' ?>">
                ^([a-z]{2,7}){0,1}( [a-z]{2,7}){1,4}$
            </p>

            <p>
                <label>Email *</label>
                <span>tenEmail@domain ( từ 12 đến 64 ký tự)</span>
                <input type="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
                ^[a-zA-Z0-9_\.]{5,32}@[a-zA-Z0-9_\.]{6,32}$
            </p>

            <p>
                <label>Số điện thoại *</label>
                <span>Số phone từ 10 đến 11 số</span>
                <input type="text" name="so_dien_thoai" value="<?php echo isset($_POST['so_dien_thoai']) ? $_POST['so_dien_thoai'] : '' ?>">
                ^[0-9]{10,11}$
            </p>

            <p>
                <label>Sinh nhật</label>
                <span>dd/mm/YYYY vd 02/10/1995</span>
                <input type="text" name="sinh_nhat" value="<?php echo isset($_POST['sinh_nhat']) ? $_POST['sinh_nhat'] : '' ?>">
                ^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$
            </p>

            <p>
                <label>Ghi chú</label>
                <span>Từ 8 đến 200 từ</span>
                <textarea name="ghi_chu" id="ghi_chu" cols="30" rows="10"><?php echo isset($_POST['ghi_chu']) ? $_POST['ghi_chu'] : '' ?></textarea>
                ^([a-z]{2,7}){0,1}( [a-z]{2,7}){1,199}$
            </p>

            <p>
                <input type="submit" name="send" id="send" value="Đăng ký">
            </p>

        </form>
    </div>

    <script>
        document.getElementById("send").onclick = function() {

            var hoten = document.forms["dang_ky"]["hoten"].value;
            var regexHoten = /^([a-z]{2,7}){0,1}( [a-z]{2,7}){1,4}$/;
            var errors = [];

            // Test the string against the regular expression
            if(!regexHoten.test(hoten)) {
                alert("Họ tên không hợp lệ");
                errors.push("Họ tên không hợp lệ");
            }

            console.log(errors);

            if (errors.length) {
                // ngăn form submit dữ liệu đi
                return false;
            }


        }
    </script>

</body>
</html>