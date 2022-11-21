<?php
    include_once ("../connect.php");
    if(isset($_POST['input'])){
        $input = $_POST['input'];
    
    $output = "";
    $sql = "SELECT * FROM tintuc WHERE title LIKE '$input%'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $output .= '<div>
            <table border="4">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                </tr>';
        while($row = mysqli_fetch_assoc($result)){
            $output .= '<tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['title'].'</td>
            </tr>';
        }
        $output .= '<table/>
            <div/>';
    }else{
        echo "<h6>DATA NOT FOUND</h6>";
    }
    echo $output;
}
?>