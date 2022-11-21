<?php 
    include_once('inc/connect.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap-grid.min.css" integrity="sha512-a+PObWRxNVh4HZR9wijCGj84JgJ/QhZ8dET09REfYz2clUBjKYhGbOmdy9KEHilYKgbMSIHNQEsonv/r75mHXw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js" integrity="sha512-5BqtYqlWfJemW5+v+TZUs22uigI8tXeVah5S/1Z6qBLVO7gakAOtkOzUtgq6dsIo5c0NJdmGPs0H9I+2OHUHVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Danh sách</title>
</head>
<body>
    <h1 style="color: #fff; text-shadow:0 1px 10px red; font-weight: 900;">In Danh Sách</h1>
    
    <p>Chọn đối tượng:  <select name="" id="choose">
        <option value="" selected>Chọn nào</option>
        
        <option value="giaovien">Giáo Viên</option>
        <option value="sinhvien">Học Sinh</option>
        <option value="hocphan">Học Phần</option>
    </select></p>   
    <hr width="500px" align="left">    
    
    <table class="table table-hover" border="1" width="500px" style="border-color: blue;">
  
  <tbody>
    
        
  </tbody>
</table>

<script>
    $(document).on('change', '#choose', function(){
        var malop = $(this).val();
        // alert(malop);
        $.ajax({
            url: 'showtable.php',
            method: 'post',
            data:{
                malop : malop
            },
            success: function(data){
                $('.table').html(data);
            },
            error: function(){
                alert("Lỗi");
            }
        })
    });
</script>
</body>
</html>