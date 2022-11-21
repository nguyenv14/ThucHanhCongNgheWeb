<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    session_start();
    if(!isset($_SESSION['dem']))
    $_SESSION['dem'] = 0;
    
?>
<body>
    <table>
        <tr>
            <th>ĐẾM</th>
            <th>
                <?php echo $_SESSION['dem']; ?>
            </th>
        </tr>
        <tr>
            <th>
                <a href="bodem.php">Next</a>
            </th>
            <th>
                <a href="reset.php">RESET</a>
            </th>
        </tr>
    </table>
</body>
</html>