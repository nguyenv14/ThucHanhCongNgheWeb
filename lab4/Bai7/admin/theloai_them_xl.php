<?php //gọi tệp connect.php
	include_once('../connect.php');
		// upload hinh anh	
	$icon=$_FILES['image']['name'];
    $anhminhhoa_tmp=$_FILES['image']['tmp_name'];
    move_uploaded_file($anhminhhoa_tmp,"../image/".$icon);


    if(isset($_POST['TenTL']) && isset($_POST['ThuTu']) && isset($_POST['AnHien'])){

    
	$theloai = $_POST['TenTL'];
	$thutu = $_POST['ThuTu'];
	$an = $_POST['AnHien'];
    }
   
    //truy vấn
	$sl = "insert into theloaitin (TenTL,ThuTu,AnHien,icon) Value('$theloai','$thutu','$an','$icon')";
    
	if(mysqli_query($connect,$sl))
	{
		echo "<script language='javascript'>alert('Them thanh cong');";
		echo "location.href='theloai.php';</script>";
		//header("location:theloai.php");
	}
	else
	{
		echo 'Lỗi: '.mysqli_connect_error();
		// echo "<script language='javascript'>alert('Không thanh cong');";
		// echo "location.href='theloai_them.php';</script>";

	}
// mysqli_close($link);
// echo "Lỗi : ".mysqli_error($connect);

?>
