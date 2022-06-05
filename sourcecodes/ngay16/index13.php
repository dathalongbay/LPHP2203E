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
    if(condition1){
       // Code to be executed if condition1 is true
    } elseif(condition2){
        // Code to be executed if the condition1 is false and condition2 is true
    } else{
        // Code to be executed if both condition1 and condition2 are false
    }
    </pre>

    <?php 
    $age = 24;
    if ($age > 0 && $age < 6) {
        echo "mầm non";
    } elseif($age >= 6 && $age < 12) {
        echo "cấp 1";
    } elseif($age >= 12 && $age < 15) {
        echo "cấp 2";
    } elseif($age >= 16 && $age < 19) {
        echo "cấp 3";
    } elseif ($age >= 19 && $age <= 23) {
        echo "sinh viên";
    } else {
        echo "lao động";
    }

    // chú ý với else if đó là nếu có nhiều điều kiện cùng đúng
    // thì điều kiện nào viết trước sẽ được chạy 
    // điều kiện đúng phía sau sẽ không chạy 
    
    ?>
</body>
</html>