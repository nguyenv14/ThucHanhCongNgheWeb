<?php
	session_start();
	// if(isset($_POST['login'])){
	include('config.php');
	$name = $_POST['username'];
	$pass = $_POST['password'];
    // $pass = md5($pass, true);
	$sl = "select * from user where userName='$name' and userPass='$pass'";
	$result= mysqli_query($conn, $sl);
	$row= mysqli_fetch_assoc($result);
	$kt= mysqli_num_rows($result);
	if($kt>0){
			$_SESSION['username']= $name;
			$_SESSION['password']= $pass;	
		if(isset($_POST['remember']) and ($_POST['remember']=="on")){
		setcookie("username", $name, time() + 60);
		setcookie("password", $pass, time() + 60);
		}
		echo "<script>alert('Login Successfull.'); 
        location.href='trangchu.php';</script>";
		echo "Chào bạn: ".$row['userName']."<br>Pass của bạn là: ".$row['userPass'];
	}
	else{
		echo "<script>alert('Login Failed.'); location.href='signin.php';</script>";
	}
	// }
	if(isset($_POST['cancel'])){
		echo "<script>location.href='index.php';</script>";
	}

	
?>

