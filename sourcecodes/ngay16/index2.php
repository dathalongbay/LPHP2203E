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
        đảm bảo code php đặt trong script mở và script đóng của php
    </pre>

    <?php 
    // lệnh echo là lệnh xuất ra màn hình
    echo "chào hà nội";
    echo "<br>";
    echo 'chào hà nội';
    // nếu chuỗi có nháy kép hay nháy đơn thì chúng ta phải dùng 
    // quy tắc nháy kép chứa nháy đơn 
    // hoặc nháy đơn chứa nháy kép
    // chào "hà nội"
    // cách 1
    echo 'chào "hà nội"';
    // cách 2 dùng escapce 
    echo "chào \"hà nội\"";
    // chào 'hà nội'
    echo "chào 'hà nội'";
    echo 'chào \'hà nội\'';

    // echo ra 1 thẻ html 
    // 
    echo "<a href=\"www.google.com\">thẻ a google</a>";
    echo '<a href="www.google.com">thẻ a google</a>';
    ?>
    <!-- thẻ mở của js -->
    <script> 
    console.log("abc");
    </script> <!-- thẻ đóng của js -->
</body>
</html>