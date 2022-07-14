# viết 1 class FileHelper với 2 chức năng chính là đọc file và ghi file
```
$f = new FileHelper();
$content = $f->readFile($path); // method đọc file với $path là đường dẫn của file được truyền vào
$f->makeFolder($folderName); // tạo folder với tên thư mục được truyền vào
$f->makeFile($folderName); // tạo file với tên thư mục được truyền vào
$f->writeFile($content, $filePath); // ghi nội dung vào 1 file đã có sẵn với $content là nội dung của file và $filePath là đường dẫn của file 
```
