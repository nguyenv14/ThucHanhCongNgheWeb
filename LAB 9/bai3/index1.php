<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mail.php" enctype="multipart/form-data" method="POST">
        <input type="text" class="form-control" name="email" placeholder="Email">
        <input type="text" class="form-control" name="name" placeholder="Name">
        <input type="text" class="form-control" name="tieude" placeholder="tiêu đề">
        <textarea name="content" id="editor" class="form-control"></textarea>
        <input type="file" class="form-control" name="file"  >
        <button type="submit" class="btn btn-primary">Gửi</button>
    </form>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<script>
                        CKEDITOR.replace( 'editor' );
</script>
</html>
</html>