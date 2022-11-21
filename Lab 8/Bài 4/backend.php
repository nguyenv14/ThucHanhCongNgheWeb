<?php
    $conn = mysqli_connect('localhost', 'root', '', 'udn');

    if(isset($_POST['pass'])){
        $name = $_POST['name'];
        $pass = $_POST['pass'];

        $sql = 'SELECT * FROM sinhvien WHere hoten = "'.$name.'" AND matkhau ="'.$pass.'"';
        $result = mysqli_query($conn, $sql);

        $output = '';
        if(mysqli_num_rows($result) > 0){
            $output .= '<a href="QLSV.php">Next</a>';
        }else if(mysqli_num_rows($result) == 0){
            $output .= 'Nhap thong tin sai';
        }
        echo $output;
    }
?>