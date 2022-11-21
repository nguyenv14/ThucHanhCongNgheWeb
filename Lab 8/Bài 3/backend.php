<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'udn');

    if(isset($_POST['value'])){
        $data = $_POST['value'];
        $sql = 'SELECT * FROM hocphan WHERE tenhp LIKE "'.$data.'%';
        $result = mysqli_query($conn, $sql);
        $output = '';
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $output .= '<p>'.$row['tenhp'].'</p>';
            }
        }else{
            $output = 'Không có dữ liệu';
        }
        echo $output;
    }
?>