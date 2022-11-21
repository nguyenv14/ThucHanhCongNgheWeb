<?php
    include_once ('inc/connect.php');

    if(isset($_POST['malop'])){
        $data = $_POST['malop'];
        $output = '';

        if($data == 'tatca'){
            $sql = 'Select * from sinhvien';
            $result = mysqli_query($conn, $sql);
            $i = 0;
            while($row = mysqli_fetch_assoc($result)){
                $i++;
                $output .= '<tr>
                                <th scope="row">'.$i.'</th>
                                <td>'.$row['masv'].'</td>
                                <td>'.$row['hoten'].'</td>
                                <td>'.$row['diachi'].'</td>
                            </tr>';
            }
        }else {
            $sql = 'Select * from sinhvien where lop ="'.$data.'"';
            $result = mysqli_query($conn, $sql);
            $i = 0;
            while($row = mysqli_fetch_assoc($result)){
                $i++;
                $output .= '<tr>
                                <th scope="row">'.$i.'</th>
                                <td>'.$row['masv'].'</td>
                                <td>'.$row['hoten'].'</td>
                                <td>'.$row['diachi'].'</td>
                            </tr>';
            }
        }

        echo $output;
    }
?>