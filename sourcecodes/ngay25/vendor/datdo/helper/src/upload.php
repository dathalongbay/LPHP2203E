<?php
namespace Datdo\Helper;

class Upload {

    // tên của thẻ input trong form dùng để upload
    public $fileNameForm;
    // định dạng file vd pdf,png...
    public $allowFileType = [];
    // giới hạn kích thước file vd 500000 byte
    public $limitFileSize;
    // thư mục upload
    public $uploadDir;

    // abc.jpg
    public $fileNameUpload;

    // trạng thái upload
    public $uploadStatus = true;

    // lỗi xảy ra khi upload
    public $errors = [];

    public function __construct($fileNameFormParam,$fileNameUploadParam, $allowFileTypeParam, $limitFileSizeParam,$uploadDirParam)
    {
        $this->fileNameForm = $fileNameFormParam;
        $this->fileNameUpload = $fileNameUploadParam;
        $this->allowFileType = $allowFileTypeParam;
        $this->limitFileSize = $limitFileSizeParam;
        $this->uploadDir = $uploadDirParam;
    }

    public function fileExist() {
        $filePath = ($this->uploadDir != '') ? $this->uploadDir.'/' : '';
        $filePath .= $this->fileNameUpload;
        // upload/abc.jpg
        if(file_exists($filePath) == true) {
            array_push($this->errors, "File đã tồn tại");
            return true;
        }
        return false;
    }

    public function isValidFileSize() {
        if ($_FILES[$this->fileNameForm]["size"] > $this->limitFileSize) {
            array_push($this->errors, "File quá lớn");
            return false;
        }

        return true;
    }

    public function isValidFileType() {
        $target_file = $this->uploadDir .'/'. basename($_FILES[$this->fileNameForm]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if(!in_array($imageFileType, $this->allowFileType)) {
            array_push($this->errors, "File không hợp lệ");
            return false;
        }

        return true;
    }

    public function upload() {
        $target_file = $this->uploadDir .'/'. basename($_FILES[$this->fileNameForm]["name"]);
        if(move_uploaded_file($_FILES[$this->fileNameForm]["tmp_name"], $target_file)){
            $this->uploadStatus = true;
            return $this->uploadStatus;
        }

        $this->uploadStatus = false;
        array_push($this->errors, "Move file thất bại");
        return $this->uploadStatus;
    }

    public function getErrorInfo() {
        if (empty($this->errors)) {
            return '';
        }
        $info = '<div style="color:red">'.implode('<br>', $this->errors).'</div>';
        return $info;
    }
}