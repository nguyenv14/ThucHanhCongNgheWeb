<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
    function giaiPtBac2($a, $b, $c){
      
        if($a == 0){
            if($b == 0){
                if($c == 0){
                    $nghiem = "Phương trình vô số nghiệm";
                }else{
                    $nghiem = "Phương trình vô nghiệm";
                }
            }else{
                $x = -$c/$b;
                $x = number_format($x, 2);
                $nghiem = "x = ".$x;
            }
        }else{
            $delta =  pow($b, 2) - 4 * $a * $c;
            if($delta > 0){
                $delta_can = sqrt($delta);
                $x1 = (-$b+$delta_can)/(2*$a);
			    $x2 = (-$b-$delta_can)/(2*$a);
                $x1 = number_format($x1, 2);
                $x2 = number_format($x2, 2); 
                $nghiem = "Phương trình bậc 2 có 2 nghiệm phân biệt x1 = ".$x1." và x2 = ".$x2;
            }else{
                if($delta == 0){
                    $x = -$b/(2 * $a);
                    $x = number_format($x, 2);
                    $nghiem = "Phương trình bậc 2 có 1 nghiệm kép x = ".$x;
                }else{
                    $nghiem = "Phương trình bậc 2 có vô số nghiệm.";
                }
            } 
        }
        return $nghiem;
    }

    if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])){
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        $nghiem = giaiPtBac2($a, $b, $c);
    }
?>
<body>
<form action="5.php" method="post" >
<table width="806" border="1">
<tr>
<td colspan="4" bgcolor="#336699"><strong>Giải phương trình bậc 2</strong></td>
</tr>
<tr>
<td width="83">Phương trình </td>
<td width="236">
<input name="a" type="text" />
    X^2 + </td>
<td width="218"><label for="textfield3"></label>
<input type="text" name="b" id="textfield3" />
      X+</td>
<td width="241"><label for="textfield"></label>
<input type="text" name="c" id="textfield" />
      =0</td>
</tr>
<tr>
<td colspan="4">
  Nghiệm  
<label for="textfield2"></label>
<input name="textfield" type="text" id="textfield2" width="900" size="70" value="<?php if(isset($nghiem)) echo $nghiem ?>" /></tr>
<tr>
<td colspan="4" align="center" valign="middle"><input type="submit" name="chao" id="chao" value="Xuất" /></td>
</tr>
</table>
</form>
</body>
</html>
