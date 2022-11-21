<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
<?php
    session_start();
    $_SESSION['NAME'] = "Vĩnh Nguyên";
    $_SESSION['AGE'] = "19";
    $_SESSION['ID'] = "21IT431";  
?>
</head>
<body>
    <table>
        <tr>
            <th>Tên bạn là</th>
            <th><?php echo $_SESSION['NAME']; ?></th>
        </tr>
        <tr>
            <th>Tuổi của bạn</th>
            <th><?php echo $_SESSION['AGE']; ?></th>
        </tr>
        <tr>
            <th>Mã sinh viên</th>
            <th><?php echo $_SESSION['ID']; ?></th>
        </tr>
    </table>
    <a href="testsession.php">Click here</a>
</body>
</html>