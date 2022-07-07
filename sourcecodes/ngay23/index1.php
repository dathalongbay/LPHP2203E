<?php
// dùng keyword interface để tạo ra 1 interface
interface InterfaceName {

    // chỉ có khai báo method mà không có code thực thi trong method
    public function methodName1();

    public function methodName2($param1, $param2);

    // code thực thi của method này return về kiểu dữ liệu là string
    public function methodName3() : string;
}