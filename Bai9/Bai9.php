<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<?php
    $file_name = $_FILES['ufile']['name'];
    $file_size = $_FILES['ufile']['size'];
    $file_temp = $_FILES['ufile']['tmp_name'];

    move_uploaded_file($file_temp, "./image/".)


?>



</head>
<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<input type="hidden" name="MAX_FILE_SIZE" value="5000000"><!-- gioi han file upload - don vi la byte -->
<label>Upload
<input type="file" name="ufile" id="ufile" />
</label>
<p>

<input type="submit" name="upload" id="upload" value="Up load" />

</p>
</form>
</body>
</html>
