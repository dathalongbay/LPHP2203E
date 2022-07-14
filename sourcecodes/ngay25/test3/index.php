<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
    include_once "class.Image.php";
    $image1 = new Image('https://znews-photo.zingcdn.me/w960/Uploaded/bzqvpdlu/2022_05_29/fef75c18b44d76132f5c.jpg', 300, 100, 'noi dung alt cua anh');
    $imageHtml = $image1->render();
    echo $imageHtml;
    ?>
</body>
</html>