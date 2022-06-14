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
        xây dựng 1 form tính chỉ số bmi
        nhập vào chiều cao và cân nặng in ra chỉ số bmi và phân lọai
        sử dụng $_GET
        tham khảo : https://hiu.vn/y-te-suc-khoe/cach-do-va-tinh-chi-so-bmi/#:~:text=BMI%20%3D%20(c%C3%A2n%20n%E1%BA%B7ng%20)%2F(chi%E1%BB%81u,c%C3%B3%20c%C3%A2n%20n%E1%BA%B7ng%20l%C3%BD%20t%C6%B0%E1%BB%9Fng.
    </pre>

    <?php
    // include "đường dẫn của file muốn nạp";
    // include được dùng nạp nội dung từ 1 file khác vào file hiện tại
    // trong thực tế có ứng dụng hàng nghìn dòng code
    // do đó tách ra thành các file có chức năng khác nhau
    include "function1.php";

    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    // isset() kiểm tra phần tử trong mảng tồn tại hay chưa
    // nếu tồn tại thì trả true ngược lại thì trả về false
    if (is_array($_GET) && isset($_GET['chieu_cao']) && isset($_GET['can_nang'])) {
        $canNang =  $_GET['can_nang'];
        $chieuCao =  $_GET['chieu_cao'];
        $output = tinhBmi($chieuCao, $canNang);
        echo "<br> Chỉ số bmi là : " . $output['bmi'];
        echo "<br> Phân loại : " .  $output['phan_loai'];
    }
    ?>

    <form action="" name="bmi" method="get">
        <p>
            chiều cao (mét)
            <input type="text" name="chieu_cao" value="">
        </p>
        <p>
            cân nặng (kg)
            <input type="text" name="can_nang" value="">
        </p>
        <input type="submit" name="tinh_bmi" value="Tính BMI">
    </form>


</body>
</html>