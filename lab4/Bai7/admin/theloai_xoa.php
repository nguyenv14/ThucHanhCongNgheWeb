<?php
    include_once ("../connect.php");
    if(isset($_GET['idTL'])){
        $idTL = $_GET['idTL'];
         
        $sql = "DELETE FROM `theloaitin` WHERE idTL = '".$idTL."'";

        if(mysqli_query($connect, $sql)){
            echo "<script language='javascript'>alert('sua thanh cong');";
            echo "location.href='theloai.php';</script>";
        }else{
            echo "<script language='javascript'>alert('Xóa không thanh cong');";
            echo "location.href='theloai.php';</script>";
        }
    }
?>