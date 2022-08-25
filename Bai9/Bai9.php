<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>
<body>
<form action="Bai9.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<input type="hidden" name="MAX_FILE_SIZE" value="5000000"><!-- gioi han file upload - don vi la byte -->
<label>Upload
<input type="file" name="ufile" id="ufile" />
</label>
<p>

<input type="submit" name="upload" id="upload" value="Up load" />
</p>
<?php
    
    // move_uploaded_file($file_temp, "./image/".$file_name);
    if(isset($_FILES['ufile'])){
        $file_name = $_FILES['ufile']['name'];
        $file_size = $_FILES['ufile']['size'];
        $file_temp = $_FILES['ufile']['tmp_name'];
        $taget_path = "image/".basename($file_name);
        $regx = "/gif|jpg|png|jpeg/i";
        if(!preg_match($regx, basename($file_name))){
            echo "Đây không phải là file ảnh vui lòng upload lại";
        }else{
            if(file_exists($taget_path)){
                echo "File ảnh đã tồn tại trong folder";
            }else{
                if($file_size > 20480000){
                    echo "File ảnh quá lớn!!!";
                }else{
                    if(move_uploaded_file($file_temp, $taget_path)){
                        echo "File ảnh ".$file_name." đã được upload!!!";
                    }else{
                        echo "Đã có lỗi khi upload file ảnh";
                    }
                }
            }
        }
}
?>
</form>
</body>
</html>
