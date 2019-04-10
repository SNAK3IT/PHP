<?php require __DIR__ ."/vendor/autoload.php"; use Blog\Post; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>BLOG</title>
    </head>
    <body>
        <p>
            <a href="/newpost.php">Criar POSTS</a>
        </p>
        <H1>BLOG</H1>
        <?php
            $conn = new mysqli("localhost","root","","blog");
            $sql = "select * from posts;";
            $table = $conn->query($sql);
            if (mysqli_num_rows($table) > 0){
                while($row = mysqli_fetch_assoc($table)){
                    $post = new Post();
                    $post->FormatPost($row);
                ?>
                    <h2><a href="posts.php?post=<?php echo $post->id; ?>"><?php echo $post->title; ?></a></h2>
                    
                <?php
                }
            }else{
                ?>
                <h6>NÃO EXITEM POSTS</h6>
                <?php
            }
            $conn->close();
        ?>
    </body>
</html>