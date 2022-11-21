<?php
    include_once ('inc/connect.php');

    if(isset($_POST['malop'])){
        $data = $_POST['malop'];
        $output = '';

        if($data == 'giaovien'){
            $sql = 'Select * from '.$data.'';
            $result = mysqli_query($conn, $sql);
            $i = 0;
            $output = '<thead>
                    <tr style="background-color: red; color: #fff;">
                    <th scope="col">TT</th>
                    <th scope="col">Mã Số</th>
                    <th scope="col">Họ Tên</th>
                    <th scope="col">Mật Khẩu</th>
                    </tr>
                </thead>
                <tbody>';
            while($row = mysqli_fetch_assoc($result)){
                $i++;
                $output .= '<tr>
                                <th scope="row">'.$i.'</th>
                                <td>'.$row['magv'].'</td>
                                <td>'.$row['hoten'].'</td>
                                <td>'.$row['matkhau'].'</td>
                            </tr>';
            }
            $output .= '</tbody>';
        }else if($data == 'sinhvien'){
            $sql = 'Select * from '.$data.'';
            $result = mysqli_query($conn, $sql);
            $i = 0;
            $output = '<thead>
                <tr style="background-color: red; color: #fff;">
                <th scope="col">TT</th>
                <th scope="col">Mã Số</th>
                <th scope="col">Họ Tên</th>
                <th scope="col">Địa Chỉ</th>
                <th scope="col">Mật Khẩu</th>
                </tr>
            </thead>
            <tbody>';
            while($row = mysqli_fetch_assoc($result)){
                $i++;
                $output .= '<tr>
                                <th scope="row">'.$i.'</th>
                                <td>'.$row['masv'].'</td>
                                <td>'.$row['hoten'].'</td>
                                <td>'.$row['diachi'].'</td>
                                <td>'.$row['matkhau'].'</td>

                            </tr>';
            }
            $output .= '</tbody>';
        }else if($data == 'hocphan'){
            $sql = 'Select * from '.$data.'';
            $result = mysqli_query($conn, $sql);
            $i = 0;
            $output = '<thead>
                <tr style="background-color: red; color: #fff;">
                    <th scope="col">TT</th>
                    <th scope="col">Mã Số</th>
                    <th scope="col">Tên Học Phần</th>
                    <th scope="col">Tín Chỉ</th>
                    <th scope="col">Học Kì</th>
                </tr>
            </thead>
            <tbody>';
            while($row = mysqli_fetch_assoc($result)){
                $i++;
                $output .= '<tr>
                                <th scope="row">'.$i.'</th>
                                <td>'.$row['mahp'].'</td>
                                <td>'.$row['tenhp'].'</td>
                                <td>'.$row['tinchi'].'</td>
                                <td>'.$row['hocky'].'</td>

                            </tr>';
            }
            $output .= '</tbody>';
        }

        echo $output;
    }
?>