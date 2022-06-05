<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        hằng số trong php 
        khác với biến thay đổi giá trị trong quá trình chạy 
        hằng số không thay đổi giá trị khi chạy 
        khi khai báo tên hằng số thì nên viết hoa và không có $

        define("TEN_HANG_SO", "giá trị");
        echo TEN_HANG_SO;

        chú ý : tên biến thì không dùng ký tự đặc biệt chỉ chứa số và chữ ( không bắt đầu bằng 1 số )
    </pre>

    <?php
    define("COUNTRY", "Việt nam");
    define("CITY", "Hà nội");
    
    echo "<br>" . COUNTRY;
    echo "<br>" . CITY;
    ?>
</body>
</html>