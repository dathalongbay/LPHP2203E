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
        fopen("data.txt", "r"); lệnh mở file có 2 đối số cần truyền vào 1 là đường dẫn file 2 là chế độ đọc hay ghi file (r,r+,w...)
        file_exists("đường dẫn file") trả về true nếu file tồn tại trả về false nếu ngược lại
        fclose() đóng file lại
        fread(file handle khi mở, độ dài theo byte)
        nếu ko muốn nhâp độ dài theo byte thì viết
         $content = fread($handle, filesize($file));
        trong đó filesize($file) trả về kích cỡ của file theo bytes
        readfile() đọc file
        file_get_contents() đọc nội dung từ file
        fwrite() ghi file
        rename() thay đổi tên file
        file_put_contents() ghi nội dung vào file
        unlink() xóa file

    </pre>
</body>
</html>