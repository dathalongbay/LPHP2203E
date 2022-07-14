<?php


// Check if the form was submitted
// $_SERVER["REQUEST_METHOD"] lấy ra kểu dữ liệu post lên là gì có thể là get hay post
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    // isset() nếu truyền vào 1 biến nó sẽ kiểm tra biến đó có tồn tại hay không
    // tồn tại trả về true ngược lại trả về false
    // isset() truyền vào 1 index trong mảng
    // ví dụ isset($_FILES["photo"] nó sẽ kiểm tra phần tử trong mảng có tồn tại hay không
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png", "xlsx" => "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        // array_key_exists kiểm tra 1 key có tồn tại trong mảng hay không

        if(!array_key_exists($ext, $allowed)) {
            die("Error: Please select a valid file format.");
        }

        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

        // Verify MYME type of the file
        // in_array("giá trị", $mang) kiểm trả value có tồn tại trong mảng ko
        // nếu có trả về true ngược lại trả về false
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists( $filename)){
                echo $filename . " is already exists.";
            } else{
                // để upload đến vị trí trên server thật
                // move từ dường dẫn tạm đến đích mong muốn
                //move_uploaded_file (source,target)
                move_uploaded_file($_FILES["photo"]["tmp_name"], $filename);
                echo "Your file was uploaded successfully.";
            }
        } else{
            echo "Error: There was a problem uploading your file. Please try again.";
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
}
?>