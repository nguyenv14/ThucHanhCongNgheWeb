<!DOCTYPE html>
<html lang="en">
<head>
<?php
    // $_SESSION['limit1'] = $_GET['lala'];
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>

</head>
<body>
  

    <div class="wrapper">
    <!-- <table class="table">
        <thead>
            <tr>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
        </tbody>
    </table> -->
    <div id="get-data">


       
    </div>
   <div class="nhan">

   </div>
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

// function fetch_data1(page1){
//         $.ajax({
//             url: "xuly.php",
//             method: "POST",
//             data:{
//                 page1: page1
//             },
//             success:function(data){
//                 $("#get-data").html(data);
//             }
//         });
//     }
    
//     $(document).on("click", "#myselect", function(){
// 	$("#myselect").click(function() {

// 		// var selectedVal = $("#myselect option:selected").text();
// 		var page1 = $("#myselect option:selected").val();
//         // console.log(page1);
// 		// alert("Hi, your favorite programming language is " + selectedVal);
//         fetch_data1(page1);
// 	});
// });

    function fetch_data(page){
        $.ajax({
            url: "xuly.php",
            method: "POST",
            data:{
                page: page
            },
            success:function(data){
                $("#get-data").html(data);
            }
        });
    }
    fetch_data();
    $(document).on("click", ".page-item", function(){
        var page = $(this).attr("id");
        fetch_data(page);
    })
    
        
</script>
</html>