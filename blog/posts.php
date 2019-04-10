<?php require __DIR__ ."/vendor/autoload.php"; use Blog\Post; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mostrar os posts</title>
    </head>
    <body>
         <?php
            $conn = new mysqli("localhost","root","","blog");
            $sql = "select * from posts where id=".$_GET['post'].";";
            $table = $conn->query($sql);
            if (mysqli_num_rows($table) > 0){
                while($row = mysqli_fetch_assoc($table)){
                    $post = new Post();
                    $post->FormatPost($row);
                ?>
                    <h1><?php echo $post->title ?></h1>                 
                    <p><?php echo $post->body ?></p>   
                <?php
                }
            }else{
                ?>
                <h2>Post not found</h2>
                <?php
            }
            $conn->close();
        ?>
    </body>
</html>