<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Danh sách thể loại</title>
</head>

<body>
<?php  include_once('../connect.php'); ?>
<table align="center" border="1" width="1200">
	<tr align="center">
	<td>Tên thể loại</td>
<td>Thứ tự</td>
<td>Ẩn hiện</td>
<td>Biểu tượng</td>
<td colspan="2"><a href="theloai_them.php">Them</a></td>
</tr>
<?php 
        //truy vấn câu lệnh sql
		$sql= "select * from theloaitin";
		$results = mysqli_query($connect,$sql);
        
        while( ($rows = mysqli_fetch_assoc($results))!= NULL )
		{
	?>
<tr align="center">
	<td>
        <!-- Gọi dữ liệu trong database -->
	<?php echo $rows['TenTL']; ?>
</td>
<td>
	<?php echo $rows['ThuTu']; ?>
</td>
<td>
	<?php if ($rows['AnHien'] == 1)
		{
			echo "Hiện"; 
        }
		else
		{
			echo "Ẩn";
		}
?>
</td>
<td><img src="../image/<?php echo $rows['icon'] ?>" width="100" height="100" /></td>
<td>
	<a href="sua_theloai.php?idTL=<?php echo $rows['idTL'];?>">Sua</a>
</td>
<td>
	<a href="theloai_xoa.php?idTL=<?php echo $rows['idTL'];?>" onclick="return confirm('Ban co chac chan khong?');">xoa</a>
</td>
</tr>
<?php } 
mysqli_close($connect);
?>
</table>

</body>
</html>
