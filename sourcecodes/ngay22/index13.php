<?php

/**
 * Kế thừa trong PHP
 */

class DienThoaiCoDien {

    public $soDienThoai = '12345';

    public function goiDien(){
        echo "<br> DienThoaiCoDien::goiDien ";
    }

    public function ngheDienThoai(){
        echo "<br> DienThoaiCoDien::ngheDienThoai ";
    }
}

/* class con kết thừa từ class thông qua từ khóa extends
    và class con có quyền kế thừa tất cả thuộc tính và phương thức class cha
với giới hạn truy cập là public và protected
class con không được phép kế thừa thuộc tính và phương thức private
*/
class DienThoaiThongMinh extends DienThoaiCoDien {

    public $internetIp = '127.0.0.1';

    public function nhanTinSms(){
        echo "<br> DienThoaiThongMinh::nhanTinSms ";
    }

    public function guiEmail(){
        echo "<br> DienThoaiThongMinh::guiEmail ";
    }

}

$vivo7 = new DienThoaiThongMinh();
echo "<br> Số điện thoại : " . $vivo7->soDienThoai;
echo "<br> Ip : " . $vivo7->internetIp;
echo "<br>  " . $vivo7->goiDien();
echo "<br>  " . $vivo7->ngheDienThoai();
echo "<br>  " . $vivo7->guiEmail();
echo "<br>  " . $vivo7->nhanTinSms();
