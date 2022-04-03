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
