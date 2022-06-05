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
        1 số hàm có sẵn để xử lý chuỗi trong php 
    </pre>

    <?php 
    $a = "hà nội việt nam";
    // in ra độ dài của 1 chuỗi
    echo "<br>" . strlen($a);
    ?>

<?php
$my_str = 'The quick brown fox jumps over the lazy dog.';
 
// Outputs: 9 đếm số từ
echo "<br> " . str_word_count($my_str);
?>

<?php 
$subject = "tôi thích uống cocacola";
// str_replace("chuỗi sẽ bị thay thế", "chuỗi thay thế", "chuỗi mẹ")
echo "<br>" . str_replace("cocacola", "pepsi", $subject);


?>
</body>
</html>