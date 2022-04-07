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