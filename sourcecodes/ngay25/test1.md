# tạo ra 1 class để UploadFile 
```
với các thuộc tính sau :
1 - trạng thái upload ( thành công hay thất bại)
2 - các lỗi xảy ra trong khi upload như file quá lớn, file đã tồn tại, file size định dạng cho phép
3 - định dạng cho phép (pdf/word/png ...) dạng mảng 
4 - kích thước file tối đa ( filesize )
5 - thư mục upload 
6 - input file name 
và các phương thức sau :
1 - constructor với các param truyền vào ( tên file upload, định dạng cho phép , kích thước tối đa filesize, thư mục upload )
2 - kiểm tra file đã tồn tại hay chưa ?
3 - kiểu tra kích thước file có hợp lệ hay không ?
4 - Kiểm tra định dạng file có hợp lệ hay không ?
5 - method upload file

Sau đó hay dùng class này trong 1 ví dụ như
<form>
    <input type="file" name="document" />
</form>
<?php
$uploadInstance = new Upload('document',['jpg','png'],500000,'target');
...
$uploadInstance->uploadFile();
```

