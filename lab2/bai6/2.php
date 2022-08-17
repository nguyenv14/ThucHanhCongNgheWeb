<!DOCTYPE html>
<html>
<head>
	<title>PHÁT SINH MẢNG VÀ TÍNH TOÁN</title>
	<meta charset="utf-8">
	<style>
	*{
    font-family: Tahoma;
	}
	table{
	    width: 400px;
	    margin: 100px auto;
	}
	table th{
	    background: #66CCFF;
	    padding: 10px;
	    font-size: 18px;
	}
	</style>
</head>
<?php
		if(isset($_POST['so_phan_tu'])){	
		$n = $_POST['so_phan_tu'];
		$mang = array($n);
		for($i = 0; $i < $n; $i++){
			$mang[$i] = random_int(0, 20); 
		}
	}
	
	function xuatMang($count, $mang){
		for($i = 0; $i < $count; $i++){
			echo $mang[$i]." ";
		}
	}

	function timMax($count, $mang){
		$max = 0;
		for($i = 0; $i <$count; $i++){
			if($mang[$i] >= $max){
				$max = $mang[$i];
			}
		}
		echo $max;
	}
	function timMin($count, $mang){
		$min = $mang[0];
		for($i = 0; $i < $count; $i++){
			if($mang[$i] <= $min){
				$min = $mang[$i];
			}
		}
		echo $min;
	}
	function timTong($count, $mang){
		$sum = 0;
		for($i = 0; $i < $count; $i++){
			$sum += $mang[$i];
		}
		echo $sum;
	}
?>
<body>
	<form action="2.php" method="POST">
		<table>
			<thead>
				<tr>
					<th colspan="2">PHÁT SINH MẢNG VÀ TÍNH TOÁN</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Nhập số phần tử:</td>
					<td><input type="text" name="so_phan_tu" width="100%" ></td> 
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Phát sinh và tính toán"></td>
				</tr>
				<tr>
					<td>Mảng: </td>
					<td><input type="text" name="mang_so" disabled="disabled" value="<?php if(isset($_POST['so_phan_tu'])) xuatMang($n, $mang) ?>"></td>
				</tr>
				<tr>
					<td>GTLN ( MAX ) trong mảng: </td>
					<td><input type="text" name="gtln" disabled="disabled" value="<?php if(isset($_POST['so_phan_tu'])) timMax($n, $mang) ?>"></td>
				</tr>
				<tr>
					<td>GTNN ( MIN ) trong mảng: </td>
					<td><input type="text" name="ttnn" disabled="disabled" value="<?php if(isset($_POST['so_phan_tu'])) timMin($n, $mang) ?>"></td>
				</tr>
				<tr>
					<td>Tổng mảng: </td>
					<td><input type="text" name="tong" disabled="disabled" value="<?php if(isset($_POST['so_phan_tu'])) timTong($n, $mang) ?>"></td>
				</tr>
			</tbody>
		</table>
	</form>
	
</body>
</html>
