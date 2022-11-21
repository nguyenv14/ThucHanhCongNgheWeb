<!DOCTYPE html>
<html lang="en">
<head>
<?php
    session_start();
    unset($_SESSION['NAME']);
    unset($_SESSION['AGE']);

?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hủy session tên và session tuổi vẫn giữ session mã sinh viên</h1>
    <h2><?php echo  $_SESSION['ID'] ?></h2>
</body>
</html>