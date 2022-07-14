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
include_once "class.UploadFile.php";
if (!empty($_FILES)) {
    // đang upload
    $fileNameFormParam = 'document';

    // abc.pdf
    $fileNameUploadParam = $_FILES['document']['name'];
    $allowFileTypeParam = ['jpg', 'JPG'];
    $limitFileSizeParam = 5;
    $uploadDirParam = 'hostFile';
    $uploadObject = new uploadFile($fileNameFormParam,$fileNameUploadParam, $allowFileTypeParam, $limitFileSizeParam,$uploadDirParam);

    $uploadOk = true;

    if ($uploadObject->fileExist() == true){
        // file đã tồn tại rồi ko upload lên nữa
        $uploadOk = false;
    } else {
        if ($uploadObject->isValidFileSize() == false) {
            $uploadOk = false;
        }
        if ($uploadObject->isValidFileType() == false) {
            $uploadOk = false;
        }
        if ($uploadObject->upload() == false) {
            $uploadOk = false;
        }
    }

    if ($uploadOk == true) {
        echo "Upload thành công";
    } else {
        echo $uploadObject->getErrorInfo();
    }
}
?>

<form action="" name="upload" method="post" enctype="multipart/form-data">
    <label for="">File upload</label>
    <input type="file" name="document" />

    <br>
    <input type="submit" value="Gửi dữ liệu">
</form>

</body>
</html>