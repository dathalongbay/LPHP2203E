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

    <?php
    if (isset($_SESSION['admin'])) {
        echo "<br> chào " . $_SESSION['admin']['username'];
        echo "<br>";
        echo "<a href='logout.php'>Đăng xuất</a>";
    } else {
        ?>
        <form name="dang_nhap" action="login.php" method="post">
            <p>
                username <input type="text" name="username" value="" />
            </p>
            <p>
                mat khau <input type="password" name="mat_khau" value="" />
            </p>
            <p>
                <input type="submit" name="login" value="Đăng nhập" />
            </p>
        </form>
        <?php
    }
    ?>


</body>
</html>