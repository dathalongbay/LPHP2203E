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
        1 - trong php chuyển human time -> timestamp ?
        strtotime()
        2 - trong php chuyển timestamp -> human time ?
        date("format", timestamp)

        ** Chú ý strtotime kén chọn format thời gian truyền vào
https://www.w3schools.com/php/php_date.asp
        nên dùng format này Y-m-d H:i:s hay Y-m-d
        không nên viết d/m/Y có thể sai
        với strtotime
    </pre>

    <?php
    $date1 = "2019-05-16";
    $time1 = strtotime($date1);
    echo "<br> strtotime " . $time1;

    // chuyển ngược lại

    $date2 = date("H:i:s d/m/Y", $time1);
    echo "<br> date : " . $date2;
    ?>

</body>
</html>