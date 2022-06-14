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
    form dùng upload file có điểm đặc biệt bắt buộc phải có thuộc tính enctype="multipart/form-data" nếu không thì ko upload được
    có input type="file" để chọn file khi upload
    và thuộc tính action của form sẽ là nơi gửi dữ liệu đến đích
    vd action="upload-manager.php"

    mảng thu được khi upload
    Array
(
    [photo] => Array
        (
            [name] => 123.pdf
            [type] => application/pdf
            [tmp_name] => C:\Users\admin\AppData\Local\Temp\php6010.tmp
            [error] => 0
            [size] => 124147
        )

)
    trong đó index của mảng này là tên của input type="file"
    input type="file" name="photo" trường hợp này key của mảng là photo
    các tham số bên trong gồm
     [name] => 123.pdf tên file
     [type] => application/pdf kiểu file upload
     [tmp_name] => C:\Users\admin\AppData\Local\Temp\php6010.tmp đường dẫn tạm
    trước khi upload lên đường dẫn thật php upload file lên 1 đường dẫn tạm
    [error] => 0 là có lỗi khi upload hay không
    [size] => 124147 là kích cỡ của file upload

</pre>

<form action="upload2.php" method="post" enctype="multipart/form-data">
    <h2>Upload File</h2>
    <label for="fileSelect">Filename:</label>
    <input type="file" name="photo" id="fileSelect">
    <input type="submit" name="submit" value="Upload">
    <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
</form>

</body>
</html>