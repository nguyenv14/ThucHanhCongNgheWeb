<?php 
    $HOST = "localhost";
    $USERNAME = "root";
    $PASS = "";
    $DBNAME = "tintuc";
    $conn = mysqli_connect($HOST, $USERNAME, $PASS, $DBNAME);
    if(mysqli_connect_errno() !== 0){
        die("Error: Could not connect to the database. An error ".mysqli_connect_error()."ocurred.");
    }
        // echo "Kết nối thành công";
    // }
    mysqli_set_charset($conn,'utf8');
?>