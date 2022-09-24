<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    header{
        display: flex;
        flex-direction: column;
    }
    .get_data{
        display: flex;
        justify-content: center;
    }
</style>
    <title>Document</title>
</head>
<body>
    <header>
    <div class="search">
        <h1>Search title</h1>
        <input type="text" class="live_search">
    </div>
    <div class="get_data">

    </div>
    </header>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function(){
        $(".live_search").keyup(function(){
            var input = $(this).val();
            if(input != ''){
                $.ajax({
                    url: "xuly.php",
                    method: "POST",
                    data: {input:input},
                    success:function(data){
                        $(".get_data").html(data);
                        $(".get_data").css("display", "block");
                    }
                });
            }else{
                $(".get_data").css("display", "none");
            }
        });
    });
</script>

</html>