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
        xóa 1 session như thế nào
        unset($_SESSION["ten_sesion"]);
    </pre>
<?php
if (isset($_SESSION['email'])) {
    unset($_SESSION['email']);
}

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
</body>
</html>