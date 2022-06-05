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
    switch(n){
    case label1:
        // Code to be executed if n=label1
        break;
    case label2:
        // Code to be executed if n=label2
        break;
        ...
        default:
            // Code to be executed if n is different from all labels
    }
    </pre>

    <?php 
    $thu_trong_tuan = 3;
    switch($thu_trong_tuan) {
        case 2:
            echo "toán văn anh";
            break;
        case 3:
            echo "toán lý hóa"; 
            break;
        case 4:
            echo "anh sinh tin"; 
            break;   
        case 5:
            echo "gdcd sử địa"; 
            break;           
        default:
            echo "hôm nay nghỉ";    
    }
    // chú ý sau case phải kết thúc bằng lệnh break;
    // còn default thì ko cần 
    
    ?>
</body>
</html>

