<!DOCTYPE html>
<html lang="en">
<?php 
    include_once ("connect.php");

    if(isset($_GET['page'])){
        $page = $_GET['page']; // lấy số trang hiện tại 
    }else{
        $page = 1; //không thì vẫn ở trang thứ nhất.
    }
    $limit = $_GET['lala'];
    $start = ($page -1) * $limit;

    $sql = "SELECT * FROM tintuc LIMIT $start, $limit";
    $result = mysqli_query($conn, $sql);

    $total_row = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tintuc")); // lấy tổng số hàng đã truy vấn được

    $total_page = ($total_row / $limit) + 1;
    echo '<div class="title">';
    while($row = mysqli_fetch_assoc($result)){
        // echo '< class="title">
        echo '<a href="">'.$row['id'].' '.$row['title'].'</a> <br/>';
    }
    echo '<div/>';

    echo '<div class="show_page">';
    for($i = 1; $i < $total_page; $i++){
        echo '<a href="phantrang.php?page='.$i.'" color="blue">'.$i.'</a>  ';
    }
    echo '<div/>';
?>
<head>
    <body>
        <form action="" method="POST">
        <select name="lala" id="">
            <option value="5" selected> 5 entity</option>
            <option value="10"> 10 entity</option>
            <option value="15"> 15 entity</option>
        </select>
        </form>
    </body>
</head>
