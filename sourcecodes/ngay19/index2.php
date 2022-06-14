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
        - include("đường dẫn của file")
        1 - nạp các file theo chức năng
        2 - chia nhỏ template

        4 lệnh tương đương nhau về include
        A - include
        B - include_once
        C - require
        D - require_once
        giống nhau là cùng chức năng để nạp file
        khác nhau ?

        include : gọi bao nhiêu lần nó nạp bấy nhiều lần
        include_once : gọi bao nhiều lần thì vẫn chỉ nạp 1 lần duy nhất

        so sánh include và require
        include thất bại khi không tim thấy file hay do 1 lý do khác thì include vẫn chạy tiếp mặc dù có báo lỗi warning
        nhưng require nếu không tìm thấy file để nạp thì sẽ gặp lỗi fatal error và chương trình ngừng chạy ngay lập tức

    </pre>

</body>
</html>