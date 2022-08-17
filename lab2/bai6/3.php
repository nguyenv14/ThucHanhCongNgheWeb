<!DOCTYPE html>
<html>
<head>
	<title>ĐẾM SỐ LẦN XUẤT HIỆN VÀ TẠO MẢNG DUY NHẤT</title>
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
	input{
		width: 100%;
	}
	</style>
</head>
<body>
    <?php
        if(isset($_POST['nhap_mang'])){
            $mang = explode(" ", $_POST['nhap_mang']);
            $soLan = array_count_values($mang);
            $mang = array_unique($mang);
            $n = count($mang);

            $chuoi ="";
            foreach( $soLan as $giatri => $lan){
                $chuoi = $chuoi.$giatri.":".$lan."  ";
            }

        }
        function xuatMang($mang, $n){
            for($i = 0; $i < $n; $i++){
                echo $mang[$i]." ";
            }
        }
    ?>
	<form action="3.php" method="POST">
		<table border="0">
			<thead>
				<tr>
					<th colspan="2">ĐẾM SỐ LẦN XUẤT HIỆN VÀ TẠO MẢNG DUY NHẤT</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Mảng:</td>
					<td><input type="text" name="nhap_mang" value="<?php if(isset($_POST['nhap_mang'])) echo $_POST['nhap_mang']; ?>" ></td>
				</tr>
				<tr>
					<td>Số lần xuất hiện:</td>
					<td><input type="text" name="so_lan_xuat_hien" value="<?php if(isset($_POST['nhap_mang'])) echo $chuoi; ?>" disabled="disabled" ></td>
				</tr>
				<tr>
					<td>Mảng duy nhất:</td>
					<td><input type="text" name="mang_duy_nhat" value="<?php if(isset($_POST['nhap_mang'])) xuatMang($mang, $n); ?>" disabled="disabled" ></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Thực hiện"></td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>
 
