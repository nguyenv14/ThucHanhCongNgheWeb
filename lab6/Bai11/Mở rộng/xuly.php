<?php
    include_once ("../connect.php");
    if(isset($_POST['page1'])){
        // $_SESSION['limit1'] = $_POST['page1'];
        $limit1 =$_POST['page1'];  
    }else{
        $limit1 = 5;
    }
    if(isset($_POST['page'])){
        $page = $_POST['page']; // lấy số trang hiện tại 
    }else{
        $page = 1; //không thì vẫn ở trang thứ nhất.
    }
    $output = '';
    // $limit = 5;
    $start = ($page - 1) * $limit1;

    $sql = "SELECT * FROM tintuc LIMIT $start, $limit1";
    $result = mysqli_query($conn, $sql);

    $total_row = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tintuc")); // lấy tổng số hàng đã truy vấn được
    $output = '
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                </tr>';
    $total_page = ceil(($total_row / $limit1) + 1);

    while($row = mysqli_fetch_assoc($result)){
        $output .= '
            <tr>
                <th>'.$row['id'].'</th>
                <th>'.$row['title'].'</th>
            </tr>
        ';
    }
    $output .= '
        </table>
    <div/>';

    $output .= '<ul class="pagination">';
    if($page > 1){
        $previous = $page - 1;
        $output .= '<li class="page-item" id="1"><span class="page-link">First page</span></li>';
        $output .= '<li class="page-item" id="'.$previous.'"><span><i class="fa fa-arrow-left"></i></span>
        </li>';
    }

    for($i = 1; $i < $total_page; $i++){
        $active = "";
        if($i == $page && $i*$limit1 <= $total_row ){
            $active = "active";
        }
        $output .= '<li class="page-item '.$active.'" id="'.$i.'"><span class="page-link">'.$i.'</span></li>';
    }
    if($page < $total_page){
        $page++;
        $total_page--;
        $output .= '<li class="page-item" id="'.$page.'"><span><i class="fa fa-arrow-right"></i></span></li>';
        $output .= '<li class="page-item" id="'.$total_page.'"><span class="page-link">Last page</span></li>';
    }
    $output .= "</ul>";

    $output .= ' <select name="lala" id="myselect">';
    for($i = 5; $i - 1 <= $total_row; $i = $i + 5){
        $active = "";
        if($i == $limit1){
            $active = "selected";
        }
        $output .= '<option '.$active.'>'.$i.'</option>';
    }
    $output .= '</select> ';
    echo $output;
?>