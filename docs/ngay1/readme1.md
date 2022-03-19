# tìm hiểu về git & github
# tìm hiểu html
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




