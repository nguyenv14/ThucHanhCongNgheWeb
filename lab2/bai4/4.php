<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tính toán</title>
</head>
<?php
    if(isset($_POST['so_dau']) && isset($_POST['so_cuoi'])){
        $a = $_POST['so_dau'];
        $b = $_POST['so_cuoi'];

        $tong_cac_so = 0;
        for($i = $a; $i <= $b; $i++){
            $tong_cac_so += $i; 
        }

        $tich_cac_so = 1;
        for($i = $a; $i <= $b; $i++){
            $tich_cac_so *= $i; 
        }

        $tongchan = 0;
        $tongle = 0;
        $demchan = 0;
        $demle = 0;
        for($i = $a; $i <= $b; $i++){
            if($i % 2 ==0){
                $tongchan += $i;
                $demchan++; 
            }else{
                $tongle += $i;
                $demle++;
            }
        }
    }
?>
<body>

<form action="4.php" method="post" >
    <table width="728" border="1">
        <tr>
            <td width="122">&nbsp;</td>
            <td width="76">Số bắt đầu</td>
            <td width="169"><label for="textfield"></label>
            <input type="text" name="so_dau" id="textfield" value=""/></td>
            <td width="152">Số kết thúc</td>
            <td width="175"><label for="textfield2"></label>
            <input type="text" name="so_cuoi" id="textfield2" value=""/></td>
        </tr>
        <tr>
        <td colspan="5">Kết quả
            <label for="textfield3"></label></td>
        </tr>
        <tr>
            <td>Tổng các số</td>
            <td colspan="4"><label for="textfield4"></label>
            <input type="text" name="tong" id="textfield4" value="<?php if(isset($tong_cac_so)) echo $tong_cac_so ?>"/></td>
        </tr>
        <tr>
            <td>Tích các số</td>
            <td colspan="4"><label for="textfield5"></label>
            <input type="text" name="tich" id="textfield5" value="<?php if(isset($tich_cac_so)) echo $tich_cac_so ?>"/></td>
        </tr>
        <tr>
            <td>Tổng các số chẵn</td>
            <td colspan="4"><label for="textfield6"></label>
            <input type="text" name="tong_chan" id="textfield6" value="<?php if(isset($tongchan)) echo $tongchan ?> "/></td>
        </tr>
        <tr>
            <td>Tổng các số lẻ</td>
            <td colspan="4"><label for="textfield7"></label>
            <input type="text" name="tong_le" id="textfield7" value="<?php if(isset($tongle)) echo $tongle ?>"/></td>
        </tr>
        <tr>
            <td colspan="5"><input type="submit" name="button" id="button" value="Tính toán" /></td>
        </tr>
    </table>
</form>
</body>
</html>
