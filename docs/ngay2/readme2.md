# start html & css ngày 2

# thuộc tính id
```
 Thuộc tính id và class trong thẻ html
Nhắc lại div được dùng để định nghĩa 1 khối html và thường thì thẻ
div sẽ chứa nhiểu thẻ khác

- id của thẻ html . id được sử dụng để dịnh danh 1 thẻ html là duy nhất 
hiểu đơn giản id như số chứng minh thư số căn cước 
- khi muốn style trong css theo id dùng bộ chọn css là #id vd #div1
```
# cài đặt keyboard shortcut intelj
![image](https://user-images.githubusercontent.com/6966136/160280336-7bf0df46-607f-4e58-8a43-4125e5fa4320.png)
# thẻ danh sách ul và ol 
```
<h2>Danh sách ul</h2>
<ul>
    <li>Hà nội</li>
    <li>Hải phòng</li>
    <li>Đà nẵng</li>
    <li>Thanh hóa</li>
    <li>Tp Hồ chí minh</li>
</ul>

<h2>Danh sách ol</h2>
<ol>
    <li>Hà nội</li>
    <li>Hải phòng</li>
    <li>Đà nẵng</li>
    <li>Thanh hóa</li>
    <li>Tp Hồ chí minh</li>
</ol>
```
# class 
```
 thuộc tính class trong class 
thuộc tính class được dùng để gom nhóm các thẻ html và 1 nhóm 
thuộc tính id được dùng để định danh 1 thẻ html là duy nhất 
trong css chọn theo id viết là #id 
chọn theo class viết là .className 

* chú ý : có thể sử dụng nhiều class trong thẻ html
vd : class1 class2 class3  
```
#  3 cách thêm css vào trong html 
```
cách 1 : css nội tuyến ( inline style) sử dụng thuộc tính style trực tiếp trong thẻ html
cách 2 : css nội bộ ( internal style) sử dụng thẻ style trong thẻ head để thêm css vào file html
cách 3 : css ngoại tuyến ( external style) sử dụng 1 file css từ bên ngoài 
2 bước cho cách 3 . bước 1 tạo 1 file .css và thêm code css vào file đó
bước 2 của cách 3 kết nối file html với css với nhau ( dùng thẻ link rel="stylesheet" href="đường dẫn của file css" )
thẻ link đặt trong thẻ head
``` 

ví dụ cách 3 :
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="index6style.css">
</head>
<body>
    <pre>
        3 cách thêm css vào trong html 
        cách 1 : css nội tuyến ( inline style) sử dụng thuộc tính style trực tiếp trong thẻ html
        cách 2 : css nội bộ ( internal style) sử dụng thẻ style trong thẻ head để thêm css vào file html
        cách 3 : css ngoại tuyến ( external style) sử dụng 1 file css từ bên ngoài 
        2 bước cho cách 3 . bước 1 tạo 1 file .css và thêm code css vào file đó
        bước 2 của cách 3 kết nối file html với css với nhau ( dùng thẻ link rel="stylesheet" href="đường dẫn của file css" )
        thẻ link đặt trong thẻ head 
    </pre>

    <div class="demo">
        cách 2 nội dung của thẻ div internal style
    </div>
</body>
</html>
```

# block và inline
```
 Block và inline trong html
thẻ span thường chứa văn bản và hiển thị kiểu inline mặc định 
thẻ div hiển thị kiểu block 
block có nghĩa là khối
inlien có nghĩa là hàng 
thẻ div là thẻ đại diện cho nhóm block 
Block có 2 đặc điểm : độ rộng của thẻ block luôn chiếm 100% độ rộng của thẻ mẹ . nên thẻ block luôn xuất hiện trong 1 hàng mới
Inline có đặc điểm : độ rộng của thẻ inline chỉ chiếm tương ứng với nội dung bên trong của thẻ inline
```
nhóm block gồm thẻ nào ?
```
<address><article><aside><blockquote><canvas><dd><div><dl><dt><fieldset><figcaption><figure><footer><form><h1>-<h6><header><hr><li><main><nav><noscript><ol><p><pre><section><table><tfoot><ul><video>
```
nhóm inline gồm các thẻ 
```
<a><abbr><acronym><b><bdo><big><br><button><cite><code><dfn><em><i><img><input><kbd><label><map><object><output><q><samp><script><select><small><span><strong><sub><sup><textarea><time><tt><var>
```
# filepath 
```
File path ( đường dẫn file ) rất quan trọng 
A file path describes the location of a file in a web site's folder structure.
đường dẫn file mô tả vị trí của 1 file trong cấu trúc thư mục của website . 
file path chia làm 2 loại 
loại 1 là đường dẫn tuyệt đối ( không thay đổi và cố định )
loại 2 là đường dẫn tương đối ( phụ thuộc vào cấu trúc thư mục của vị trí file)
```
chú ý :
```
file path áp dụng khi liên kết đến 1 bên ngoài giống như :
kết nối với 1 file html khác
kết nối đến 1 hình ảnh 
kết nối đến 1 file css khác 
kết nối đến 1 file javascript khác
```
chú ý :
```
<img src="picture.jpg">	
=> Hiểu là file picture.jpg nằm trong cùng 1 thư mục với file html 
<img src="images/picture.jpg">	
=> Hiểu là file html nằm cùng cấp thư mục với folder images trong images có hình ảnh picture.jpg
<img src="/images/picture.jpg">
=> hiểu thư mục images nằm trực tiếp trong folder gốc của website
website abc.com trỏ đến ip 192.168.1.1 được định danh cho 1 máy chủ web có đường dẫn cụ thể 
<img src="../picture.jpg">	
=> ../ có nghĩa là file html phải đi ngược ra bên ngoài 1 cấp thư mục 
../../ có nghĩa là phải đi ngược ra ngoài 2 cấp 
```
# html5 semantic ngữ nghĩa có nghĩa là thẻ đại diện cho 1 ý nghĩa nào đó thay cho thẻ div chủ html4
```
<article> định nghĩa thẻ này chứa 1 bài viết
<aside> định nghĩa thẻ này chứa 1 vùng bên cạnh nội dụng của trang web
<details> thẻ chứa chi tiết mà người dùng có thể xem
<figcaption> định nghĩa mô tả cho 1 thẻ figure
<figure> chứa nội dung như biểu đồ, hình ảnh 
<footer> định nghĩa chân của 1 trang web hay 1 vùng
<header> đầu trang web hay đầu vùng
<main> chứa nội dung chính
<mark> chứa text highlight 
<nav> chứa các liên kết điều hướng	Defines navigation links
<section> đinh nghĩa 1 vùng trong trang web	
<summary>	tóm tắt
<time> thời gian 
```
# selector theo tên thẻ
```
<style type="text/css">
    h1 {
        color: antiquewhite;
    }
    h2 {
        color: beige;
    }
</style>
```
# selector lồng nhau 
```
 .parent .child {
    background-color: orange;
}
```

