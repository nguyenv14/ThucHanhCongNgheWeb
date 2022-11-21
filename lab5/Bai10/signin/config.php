<?php
    $Host = "localhost";
    $Username = "root";
    $Pass = "";
    $DBname = "khachhangdb";

    $conn = mysqli_connect($Host, $Username, $Pass, $DBname);
    if(!$conn){
        die("connect failed!".mysqli_connect_error());
    }

?>