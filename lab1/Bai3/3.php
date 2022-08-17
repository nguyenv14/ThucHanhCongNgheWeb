<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Xuất số thành chữ</title>
</head>
<?php
    if(isset($_POST['so'])){
        $so = $_POST['so'];
        switch($so){
            case 0:
                    $result = "Không";
                break;
            case 1:
                $result = "Một";
                break;
            case 2:
                $result = "Hai";
                break;
            case 3:
                $result = "Ba";
                break;
            case 4:
                $result = "Bốn";
                break;
            case 5:
                $result = "Năm";
                break;
            case 6:
                $result = "Sáu";
                break;
            case 7:
                $result = "Bảy";
                break;
            case 8:
                $result = "Tám";
                break;
            case 9:
                $result = "Chín";
                break;
            default:
                $result = "Không hợp lệ";
                break;
        }
    }
?>
<body>
<form action="3.php" method="POST" >
<table width="519" border="1">
    <tr>
        <td colspan="3">Đọc số</td>
    </tr>
    <tr>
        <td>Nhập số (0-9)</td>
        <td width="69" rowspan="2"><input type="submit" name="button" id="button" value="Submit" /></td>
        <td> Bằng chữ</td>
    </tr>
    <tr>
        <td width="177"><p>
        <label for="textfield"></label>
        <input type="text" name="so" id="textfield" value="<?php if(isset($so)) echo $so; ?>"/>
        </p></td>
        <td width="232"><label for="textfield2"></label>
        <input type="text" name="chu" id="textfield2" value="<?php if(isset($result)) echo $result; ?>"/></td>
    </tr>
</table>
</form>
</body>
</html>
