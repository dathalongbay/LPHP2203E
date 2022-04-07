# đổ bóng cho văn bản
<pre>
    đổ bóng cho văn bản 
    text-shadow: X Y Z;
    X là đổ bóng theo chiều ngang
    Y là đổ bóng theo chiều dọc
    Z là màu đổ bóng 
</pre>
```
h1 {
    text-shadow: 3px 6px orange;
}
```
# font-family 
```
nhóm font : serif , sans-serif
nhóm font bao gồm nhiều font cụ thể 
font-family: A, B , C;
A và B thường là 1 font cụ thể 
C là nhóm font 
quy tắc là những tên font mà nhiều hơn 1 chữ có nghĩa là trong tên font có dấu cách thì những font này phải đặt trong nháy kép hay nháy đơn 
còn font mà tên có 1 chữ không có dấu cách thì không cần dùng "" hay ''
```
ví dụ 
```
<p class="p1">Thẻ p1 </p>
<p class="p2">Thẻ p2 </p>
<p class="p3">Thẻ p3 </p>
```
css
```
.p1,.p2,.p3 {
    font-size: 32px;
}

.p1 {
    font-family: "Times New Roman", Times, serif;
}
.p2 {
    font-family: Arial, Helvetica, sans-serif;
}

.p3 {
    font-family: "Lucida Console", "Courier New", monospace;
}
```
# google font
<h1>https://fonts.google.com/</h1>

thêm google font vào trang web
```
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:ital@1&display=swap" rel="stylesheet">
```
css
```
.p1,.p2,.p3 {
    font-size: 32px;
}

.p1 {
    font-family: 'Open Sans', sans-serif;
}
.p2 {
    font-family: 'Roboto', sans-serif;
}

.p3 {
    font-family: 'Roboto', sans-serif;
}
```
# webfont self host
```
/* khai báo tên và đường dẫn của web font */
@font-face {
    /* dòng khai báo tên */
    /* CTRL + SHIFT + / */
    font-family: Roboto;
    /* dòng khai báo nguồn file font */
    src: url("Roboto/Roboto-Regular.ttf");
}

.p1,.p2,.p3 {
    font-size: 32px;
}

.p1 {
    font-family: 'Roboto', sans-serif;
}
.p2 {
    font-family: 'Roboto', sans-serif;
}

.p3 {
    font-family: 'Roboto', sans-serif;
}
```
<h1>Webfont dạng trực tiếp : https://www.w3schools.com/css/css3_fonts.asp</h1>

# icon font 
```
<script src="a076d05399.js"></script>

<style>
    i {
        font-size:24px;
    }
</style>

<h1>Font Icon</h1>

<i class="fa-brands fa-youtube"></i>

<i class="fas fa-cloud"></i>
<i class="fas fa-heart"></i>
<i class="fas fa-car"></i>
```
# 4 trạng thái thẻ a 
```
 <pre>
    4 trạng thái thẻ a 
    1 - a:link trạng thái bình thường ban đầu 
    2 - a:visited trạng thái đã được click vào rồi
    3 - a:hover di chuột vào 
    4 - a:active ( đang click vào rất ngắn )
</pre>
<nav>
    <ul>
        <li><a href="home.html">Trang chủ</a></li>
        <li><a href="product.html">Sản phẩm</a></li>
        <li><a href="service.html">Dịch vụ</a></li>
        <li><a href="contact.html">Liên hệ</a></li>
    </ul>
</nav>
```
css
```
nav a {
    text-decoration: none;
}

nav a:link {
    color: violet;
}

nav a:hover {
    color: orange;
}

nav a:visited {
    color: black;
}

nav a:active {
    color:red;
}
```
# css cho thẻ ul ol
```
ul, ol {
    list-style: none;
    margin: 0;
    padding: 0;
}
```
# Block & Inline 
```
<pre>
    Block ( Khối ) h1 - h6 , div , section ... 
    Inline ( hàng ) span , a , img ...
    Xem cụ thể : https://www.w3schools.com/html/html_blocks.asp

    nhóm block chiếm 100% độ rộng sẵn có của thẻ cha và luôn xuống hàng mới
    nhóm inline chỉ chiếm độ rông tương ứng với nội dung của nó và nằm trên cùng 1 hàng 
</pre>

<ul>
    <li>Trang chủ</li>
    <li>Sản phẩm</li>
    <li>Liên hệ</li>
</ul>

<a href="">Lazada</a>
<a href="">Shoppee</a>
<a href="">Tiki</a>
```
CSS
```
ul {
    padding: 0;
    margin: 0;
    list-style: none;
}

li {
    background-color: green;
}

a {
    background-color: yellow;
}
```
# css display
 <pre>
    Block ( Khối ) h1 - h6 , div , section ... 
    Inline ( hàng ) span , a , img ...
    Xem cụ thể : https://www.w3schools.com/html/html_blocks.asp

    nhóm block chiếm 100% độ rộng sẵn có của thẻ cha và luôn xuống hàng mới
    nhóm inline chỉ chiếm độ rông tương ứng với nội dung của nó và nằm trên cùng 1 hàng 
</pre>
```
<ul>
    <li>Trang chủ</li>
    <li>Sản phẩm</li>
    <li>Liên hệ</li>
</ul>

<a href="">Lazada</a>
<a href="">Shoppee</a>
<a href="">Tiki</a>
``` 
css 
```
ul {
    padding: 0;
    margin: 0;
    list-style: none;
}

li {
    background-color: green;
    display: inline;
}

a {
    background-color: yellow;
    display: block;
}
```
# display:none không hiển thị
```
 ul {
    padding: 0;
    margin: 0;
    list-style: none;
}

li {
    background-color: green;
    display: none;
}

a {
    background-color: yellow;
    display: none;
}
```
# Thuộc tính position ( vị trí )
<pre>
    Thuộc tính position sẽ có 5 giá trị 
    1 - static ( tĩnh và là giá trị mặc định ) phụ thuộc 
    vào display là inline hay block và phụ thuộc 
    vào box model margin padding ... 
    2 - relative ( tương đối )
    3 - absolute ( tuyệt đội )
    4 - fixed ( cố định )
    5 - sticky ( trạng thái lai giữa relative và fixed )

    Thuộc tính position thì thường đi kèm với thuộc tính sau 
    top 
    left 
    right 
    bottom 
    hiểu đơn giản 4 thuộc tính trên dùng để đặt vị trí tọa độ 
</pre>
HTML
```
 <div class="target1">
    Box 1
</div>

<div class="target2">
    Box 2
</div>

<div class="target3">
    Box 3
</div>

<div class="target4">
    Box 4
</div>

<div class="target5">
    Box 5
</div>
```
CSS
```
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.target1 {
    width: 100px;
    height: 100px;
    background-color: orange;
    position: absolute;
    bottom: 0;
    right: 0;
}

.target2 {
    width: 100px;
    height: 100px;
    background-color: red;
    position: absolute;
    bottom: 0;
    left: 0;
}

.target3 {
    width: 100px;
    height: 100px;
    background-color: violet;
    position: absolute;
    top: 0;
    right: 0;
}

.target4 {
    width: 100px;
    height: 100px;
    background-color: olive;
    position: absolute;
    top: 0;
    left: 30px;
}

.target5 {
    width: 100px;
    height: 100px;
    background-color: olivedrab;
    position: absolute;
    top: 50%;
    left: 50%;
}
``` 
# Chú ý là relative sẽ di chuyển so với vị trí ban đầu của nó. và lấy vị trí ban đầu của nó là gốc tọa độ
```
<div class="target1">
    Relative
</div>
```
CSS
```
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    .target1 {
        width: 100px;
        height: 100px;
        background-color: olive;
        position: relative;
        top: 100px;
        left: 200px;
    }
</style>
```
# Absolute 1
<pre>
    Absolute có 2 trường hợp chú ý : 
    1 - thẻ absolute nằm trong thẻ body hoặc các thẻ cha của thẻ asbolute đều có position là static 
    2 - thẻ absolute nằm trong 1 thẻ có position là relative thì nó sẽ lấy thẻ cha làm gốc tọa độ
</pre>
CSS
```
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    .parent {
        width: 200px;
        height: 200px;
        background-color: orange;
    }
    .child {
        width: 100px;
        height: 100px;
        background-color: olive;
        position: absolute;
        top: 20px;
        left: 30px;
    }
</style>

<div class="parent">
    <div class="child">Thẻ con</div>
</div>
```
# Absolute 2
<pre>
    Absolute có 2 trường hợp chú ý : 
    1 - thẻ absolute nằm trong thẻ body hoặc các thẻ cha của thẻ asbolute đều có position là static 
    2 - thẻ absolute nằm trong 1 thẻ có position là relative thì nó sẽ lấy thẻ cha làm gốc tọa độ
</pre>
```
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    .parent {
        width: 200px;
        height: 200px;
        background-color: orange;
        position: relative;
    }
    .child {
        width: 100px;
        height: 100px;
        background-color: olive;
        position: absolute;
        top: 20px;
        left: 30px;
    }
</style>
```
HTML
```
<div class="parent">
    <div class="child">Thẻ con</div>
</div>
```
# tham khảo https://developer.mozilla.org/en-US/docs/Web/CSS/position

# position:fixed;
```
<style>
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body {
    height:1200px;
}
.target {
    height: 60px;
    color: white;
    width: 100%;
    font-size: 14px;
    background-color: orange;

    position: fixed;
    top: 0;
    left: 0;
}
</style>
```