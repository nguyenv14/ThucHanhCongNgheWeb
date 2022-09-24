<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        session_start();
        if(!isset($_SESSION['username'])){
            echo "<script>alert('Bạn phải đăng nhập!!!'); location.href='signin.php';</script>";
        }

    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello! Xin chào <?php echo $_SESSION['username'] ?> có password là: <?php echo $_SESSION['password'] ?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>