<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
    include_once '../connect.php';
    if(isset($_GET['idTL'])){
        $idTL = $_GET['idTL'];

        $sql = "Select * from theloaitin where idTL = ".$_GET['idTL'];
    }
    $result = mysqli_query($connect, $sql);
    $rows = mysqli_fetch_array($result);
    if(isset($_POST['TenTL']) && isset($_POST['ThuTu']) && isset($_POST['AnHien'])){
        $tenTL = $_POST['TenTL'];
        $thutu = $_POST['ThuTu'];
        $anhien = $_POST['AnHien'];
        $icon=$_FILES['image']['name'];
        $anhminhhoa_tmp=$_FILES['image']['tmp_name'];
        move_uploaded_file($anhminhhoa_tmp,"../image/".$icon);
    
    if($icon ==""){
        $sql = "UPDATE `theloaitin` SET `TenTL`='".$tenTL."',`ThuTu`='".$thutu."',`AnHien`='".$anhien."' WHERE idTL = ".$idTL.";";
    }else{
        $sql = "UPDATE `theloaitin` SET `TenTL`='".$tenTL."',`ThuTu`='".$thutu."',`AnHien`='".$anhien."',`icon`='".$icon."' WHERE idTL = ".$idTL.";";
    }

    if (mysqli_query($connect, $sql)) {
        echo "<script language='javascript'>alert('sua thanh cong');";
        echo "location.href='theloai.php';</script>";
    }
}
    ?>
<body>
    <form action="" method="post" enctype="multipart/form-data" name="form1">
        <table align="left"  width="400">
        <tr>
            <td align="right">
                Ten The Loai
            </td>
            <td>
                <input type="text" name="TenTL" value="<?php echo $rows['TenTL'] ?>" />
            </td>
        </tr>
        <tr>
            <td align="right">
            Thu Tu
            </td>
            <td>
                <input type="text" name="ThuTu" value="<?php  echo $rows['ThuTu'] ?>" />
            </td>
        </tr>
        <tr>
            <td align="right">
                An Hien
            </td>
            <td>
                <select name="AnHien">
                <?php if($rows['AnHien'] == 1) 
                {
                
                ?>
                    <option value="0">An</option>
                    <option selected value="1">Hien</option>
                <?php
                }else{
                ?>
                    <option selected value="0">An</option>
                    <option  value="1">Hien</option>
                <?php
                } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td align="right">icon</td>
            <img src="../image/<?php echo $rows['icon'] ?>" alt="">
            <td>
                <input type="file" name="image" id="anh" />
                
            </td>
        </tr>
        <tr>
            <td align="right">
                <input type="submit" name="Them" value="Them" />
            </td>
            <td>
                <input type="reset" name="Huy" value="Huy" />
            </td>
        </tr>
        </table>
    </form>
  

</body>
</html>
