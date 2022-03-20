# tìm hiểu về git & github
# tìm hiểu html.
```
vào trong visual code tạo ra 1 file html
gõ lệnh html:5 sinh ra file html5 mẫu
các thẻ html có thẻ mở và thẻ đóng
ví dụ 
thẻ html
<html></html>
<head></head>
<body></body>
chú ý thẻ trong html có thẻ mở và thẻ đóng
nhưng có 1 số thẻ đặc biệt chỉ có thẻ mở không có
thẻ đóng như thẻ meta
```
# thuộc tính của html
```
<html lang="en">
lang="en" là thuộc tính của thẻ html 
tên thuộc tính là lang
giá trị thuộc tính sau dấu = en 
giá trị của thuộc tính đặt trong nháy kép hay nháy đơn
```
# các thẻ html thì lồng nhau
```
thẻ html chứa thẻ head và thẻ body
trong đó thẻ head lại chứa các thẻ meta và thẻ title
```
# thẻ title trong head
```
- thẻ title in ra nội dung khi di chuột vào trên tab của trình duyệt
- nội dung trong title hỗ trợ công cụ tìm kiếm google, yahoo, coccoc
hiểu được nội dung chính của trang web đang nói về điều gì
```
# tìm hiểu thẻ meta trong thẻ head
```
<meta charset="UTF-8">
thẻ meta không có thẻ đóng và có 1 thuộc tính là charset giá trị 
charset là UTF-8 mã code 
<meta http-equiv="X-UA-Compatible" content="IE=edge">
thẻ meta số 2 tính tương thích 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
thẻ meta số 3 tên là viewport có 2 thuộc tính là name và content
nói cho trình duyệt biết chiều rộng của trang web phụ thuộc vào độ rộng của
thiết bị và khởi tạo độ rộng là 1.0
```
# phân biệt 2 thẻ head và body trong html
```
- thẻ head chứa các thẻ meta và title không hiển thị trong trình duyệt 
chủ yếu hỗ trợ seo 
- thẻ body thẻ phần thân chứa các nội dung văn bản và các thẻ con
cho phép người dùng nhìn thấy
```
# thẻ heading h1 - h6
```
6 thẻ này chứa nội dung quan trọng của văn bản bên trong
h1 chứa thông tin văn bản quan trọng hơn 
2 - h6 chứa thông tin ít quan trọng và giảm dần
```
# thẻ p
```
thẻ p là thẻ chứa đoạn văn
```
# thẻ img hình ảnh
```
thẻ hình ảnh img có thuộc tính src chứa đường dẫn của ảnh
có thuộc tính là alt="" hiển thị nội dung khi mà trình duyệt
không thể hiển thị hình ảnh ( vd mất ảnh )
```
# giới thiệu w3school
```
https://www.w3schools.com
```
# thẻ br
```
là thẻ xuống hàng là 1 thẻ đặc biệt không có thẻ đóng
```
# thẻ a là thẻ liên kết của thuộc tính href chứa liên kết
# style css trong html 
```
dùng thuộc tính có tên là style trong 1 thẻ bất kỳ 
cú pháp style="tên_thuộc_tính_css:giá_trị_của_thuộc_tính_css;tên_thuộc_tính_css2:giá_trị_của_thuộc_tính_css2;tên_thuộc_tính_css3:giá_trị_của_thuộc_tính_css3"
```
ví dụ 
```
<p style="color:red;font-size: 15px;background-color: green;">Thẻ p số 1</p>

<p style="color:yellow;font-size: 32px;background-color: gray;">Thẻ p số 2</p>

<p style="color:#ccc;font-size: 32px;background-color: rgb(255,255,0);">Thẻ p số 2</p>
```
note :
```
- thuộc tính css đầu tiên là color có 1 số định dạng màu theo tên
vd green, yellow, red ...
định dạng hex bắt đầu = chữ # ví dụ #ccc #fff
định dạng rgb ví dụ rgb(255,255,0)
- thuộc tính font-size là kích cỡ văn bản vd font-size:32px
- thuộc tính background-color là màu nền
chú ý giữa các cặp tên thuộc tính và giá trị có dấu :
đồng thời phân tách các thuộc tính = dấu ;
```
# comment chú thích trong html
hỗ trợ lập trình viên hiểu được đoạn code phía sau viết gì
``` cú pháp <!-- nội dung comment --> ```
ví dụ :
```
<!-- ROBOTS -->
<meta name="googlebot" content="noarchive" />
<meta name="robots" content="noarchive" />

<!-- FACEBOOK OPEN GRAPH -->
<meta property="fb:app_id" content="2034212100232051" />
<meta property="og:site_name" content="ZingNews.vn" />
<meta property="og:rich_attachment" content="true" />
<meta property="article:publisher" content="https://www.facebook.com/zing.vn" />
<meta property="og:type" content="article" />
<meta property="og:image" content="https://znews-photo-fbcrawler.zadn.vn/w1250/Uploaded/ofh_huqfztmf/2022_03_19/2_1.jpg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
```
# thẻ table thẻ bảng 
```
được dùng để tạo bảng
trong bảng có thẻ tr tạo bảng
thẻ td tạo cột 
```
```
bảng phức tạp hơn 1 chút 
thead và tbody 
thead là phần đầu của bảng 
tbody chứa phần thân của bảng
```
# học selector trong css là gì ?
```
selector là bộ chọn trong css để chọn đúng cái thẻ mà css muốn style 
selector đơn giản nhất là theo tên thẻ 
```
#  internal style css dùng thẻ style trong head
```
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- viết mã css internal trong thẻ style -->
    <style type="text/css">
        h1 {
            color: red;
            background-color: green;
        }
        p {
            color: green;
            background-color: yellow;
        }
        h2,h3 {
            color: violet;
        }
    </style>
</head>
```
# gom nhóm bộ chọn trong css dùng , vd h1,h2,h3 {color:red;}
```
h1,h2,h3 {
    color:red;
}
```
# thuộc tính css border đường viền
```
cú pháp : 
border:độ_rộng kiểu_border màu_viền;
ví dụ 
td {
    border: 3px solid green;
}
solid là kiểu viền liền mạch
```
# thẻ td là cột thẻ tr là hàng 
# thẻ th thay cho td trong hàng đầu tiên của bảng để tạo cột 
# thẻ div là 1 thẻ khối dùng để chứa nhiều thẻ khác bên trong
# thẻ form là 1 thẻ biểu mẫu để nhập nhiều thông tin
```
các thuộc tính của form
name là tên của form
method là phương thức gửi form (get hay post)
action là đích đến của thông tin khi chúng ta submit gửi form đi
nếu action="" thì form khi submit sẽ gửi thông tin đến chính trang hiện tại
```
```
<form name="tiki" method="post" action="http://tiki.vn/dang-ky">
    Nội dung của biểu mẫu
</form>
```
# thẻ label trong thẻ form là thẻ nhãn nằm trước thẻ input để biết thẻ input phải nhập gì
# thẻ input text
```
<input type="text" name="hoten" value="" placeholder="Nhập họ tên của bạn vào đây">
```
giải thích
```
type="text" kiểu là văn bản
name="" tên của input
value="" giá trị của input 
placeholder="" chứa gợi ý cho người dùng biết khi mà input rỗng
```
# input type="email" phải theo format tenmail@domain vd abc@gmail.com
# input type="number" là input chứa số 
# textarea
```
<textarea name="ghichu" id="ghichu" cols="30" rows="10"></textarea>
cols là số cột
rows là số hàng
```
# input type="radio"
```
<input type="radio" name="gioitinh" value="nam" /> Nam
<input type="radio" name="gioitinh" value="nu" /> Nữ
```
# select
```
 <select name="tinh">
    <option value="">Chọn tỉnh</option>
    <option value="hn">Hà nội</option>
    <option value="hcm">Hồ chí minh</option>
    <option value="dn">Đà nẵng</option>
</select>
```
# phần mềm cài đặt cho buổi 1 và 2
```
1 visual code 
https://code.visualstudio.com/
```
![image](https://user-images.githubusercontent.com/6966136/159124887-4680d97a-8476-4057-b86a-a413e54c837a.png)
```
2 gitbash
https://git-scm.com/downloads
```
![image](https://user-images.githubusercontent.com/6966136/159124973-e3e8203d-de31-4a6e-9c37-2f6e7e71ba83.png)

```
3 github desktop https://desktop.github.com/
```
![image](https://user-images.githubusercontent.com/6966136/159124925-2bc31d19-68aa-4a63-8440-0f5340c3936d.png)
```
4 octotree
https://chrome.google.com/webstore/detail/octotree-github-code-tree/bkhaagjahfmjljalopjnoealnfndnagc?hl=vi
```
![image](https://user-images.githubusercontent.com/6966136/159124941-d4b88d2e-8990-4660-aff5-a715d164852c.png)









