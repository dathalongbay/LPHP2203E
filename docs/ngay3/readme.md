# background-color màu nền
```
 .target1 {
    background-color: orange;
    width: 300px;
 }
```
# background-image ảnh nền
cú pháp background-image: url("đường dẫn của hình ảnh nền");
```
.target2 {
            background-image: url("images/images2431584_1.jpg");
            width: 1200px;
            height: 600px;
            color: #ffffff;
            border: 3px solid red;
        }
```
# background-repeat ( lặp ảnh nền hay không )
```
 khi nào thì ảnh nền sẽ bị lặp ?
- ảnh nền sẽ lặp khi mà kích cỡ thẻ lớn hơn kích cỡ gốc của ảnh nền 
vd kích cỡ của thẻ div là 1000 * 1000 nhưng ảnh nền có kích cỡ là 100px * 100px ( chắc chắn lặp )
vd kích cỡ của thẻ div là 50px * 50 px mà ảnh nền có kích cỡ 100px * 100px ( không lặp )
```
background-repeat: no-repeat; không lặp ảnh nền   
background-repeat: repeat-x; lặp theo chiều ngang   
background-repeat: repeat-y; lặp theo chiều dọc   
background-repeat: repeat; lặp theo chiều ngang và dọc ( đây là giá trị mặc định )   
#  background-attachment:fixed đính kèm ảnh nền 1 cách cố định
<pre>
    chú ý giá trị mặc định của background-attachment là scroll
    chú ý là thuộc tính background-attachment muốn có ảnh hưởng background-repeat: no-repeat;
</pre>
# background-attachment:scroll; ảnh nền không cố định
# background-position vị trí của ảnh nền
```
 chú ý muốn dùng được background-position thì phải dùng kèm background-repeat: no-repeat;
background-position:X Y;
X là chiều ngang 
Y là chiều dọc

background-position: right top;          bên tay phải trên cùng 
background-position: right bottom;      bên tay phải dưới cùng
background-position: left bottom;    bên tay trái dưới cùng
background-position: center top;    ở giữa trên cùng
background-position: center bottom;  ở giữa dưới cùng
background-position: center center;  ở giữa theo cả chiều ngang và dọc
```
# background-position dùng theo đơn vị px
```
background-position: 100px 50px;
```
# background-position dùng theo đơn vị %
```
background-position: 10% 20%;
```
# Viết rút gọn
<pre>
    Thự tự là giá trị của các thuộc tính này
1. background-color
2. background-image
3. background-repeat
4. background-attachment
5. background-position
</pre>

```
.target {
            width: 500px;
            height: 500px;
            border: 1px solid red;
            background-color: orange;
            background-image: url("images/abc.jpg");
            background-repeat: no-repeat;
            background-position: center center;
        }

        .target1 {
            width: 500px;
            height: 500px;
            border: 1px solid red;
            background: orange url("images/abc.jpg") no-repeat center center;
        }
```

# <h1>Border đường viền</h1>
<pre>
    border-style: solid; là phong cách của đường viền
    border-width: 3px;
    border-color: red;
</pre>
#  <h1>Viết rút gọn border </h1>
<pre>thứ tự khi viết rút gọn là giá trị của các thuộc tính theo thứ tự :
    1. border-width 
    2. border-style
    3. border-color
</pre>
# trang trí viền cho các cạnh khác nhau
```
.target {
    width: 500px;
    height: 300px;
    border-top: 2px solid red;
    border-left: 4px dashed yellow;
    border-right: 1px dotted orange;
    border-bottom: 8px double violet;
}
```
# quan sát border style trực quan tại https://www.w3schools.com/css/css_border.asp 
# <h1>Bo tròn viền border-radius</h1>
```
 .target1 {
            width: 300px;
            border: 3px solid red;
            border-radius: 30px;
            padding: 10px;
        }
```
# <h1>CSS margin dùng để căn chỉnh cách cách thành phần khác trên trang</h1>
```
.target1 {
            border: 1px solid red;

            margin-left: 100px;
            margin-top: 50px;
            margin-right: 200px;
            margin-bottom: 20px;
        }
```
# <h1>CSS padding là độ rộng vùng đệm</h1>
<pre>
    chú ý cho phần margin căn giữa 1 thẻ vào giữa màn hình hay giữa bên trong 1 thẻ khác 
    phải đặt 1 chiều rộng cụ thể cho thẻ đó 
    phải đặt margin left là auto và margin right là auto
</pre>
<pre>
    padding-top 
    padding-left 
    padding-right 
    padding-bottom

    padding là độ rộng phần đệm nằm giữa border và content
</pre>
```
.target {
            border: 1px solid orange;
            width: 300px;
            border-radius: 24px;
            margin-left: auto;
            margin-right: auto;

            padding-top: 10px;
            padding-left: 50px;
            padding-right: 20px;
            padding-bottom: 70px;
        }
```

