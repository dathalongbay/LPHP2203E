<?php
class Goodbye {
    // hằng số trong class dùng từ khóa const để khai báo
    // tên hằng số viết hoa
    // chú ý tên const không có dấu $
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";

    public function byebye() {
        // trong class dùng từ khóa self::constName thay vì $this
        echo self::LEAVING_MESSAGE;
    }
}
// truy cập từ ngoài class vào hằng số bằng cách ClassName::ConstName
// mà không cần khởi tạo class thông qua từ khóa new
echo Goodbye::LEAVING_MESSAGE;
?>