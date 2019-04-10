<?php
    require __DIR__ ."/vendor/autoload.php"; 
    use lib\livros;
    use lib\dvdmusica;
    use lib\dvdvideo;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Index -> Products</title>
    </head>
    <body>
        <h1>Lista geral de Produtos</h1>
        <?php
            $conn = new mysqli("localhost","root","","lib");
            if(!$conn){echo "Erro de conexão a Basedados";}
            $sqllivro = "SELECT * FROM livro;";
            $sqlvideo = "SELECT * FROM disco_video;";
            $sqlmusic = "SELECT * FROM disco_music;";

            $tablelivros = $conn->query($sqllivro);

            $tablevideo = $conn->query($sqlvideo);
            
            $tablemusic = $conn->query($sqlmusic);

            if(mysqli_num_rows($tablelivros) > 0 || mysqli_num_rows($tablevideo) > 0 || mysqli_num_rows($tablemusic) > 0){
                while($rowlivro == mysqli_fetch_assoc($tablelivros) || $rowvideo == mysqli_fetch_assoc($tablevideo) || $rowmusic == mysqli_fetch_assoc($tablemusic)){
                    $livro = new livros();
                    $livro->FormatLivro($rowlivro);

                    $video = new dvdvideo();
                    $video->Formatvideo($rowvideo);

                    $music = new dvdmusica();
                    $music->Formatmusic($rowmusic);
                }
                ?>
                <h2><a href="livors.php?livro=<?php echo $livro->Getisbn(); ?>"><?php echo $livro->Getisbn(); ?></a></h2>
                <h2><a href="video.php?video=<?php echo $video->id; ?>"><?php echo $video->title; ?></a></h2>
                <h2><a href="posts.php?post=<?php echo $music->id; ?>"><?php echo $music->title; ?></a></h2>
                <?php
            }else{
                ?>
                <h1>Não tem nada na base dados</h1>
                <?php
            }
        ?>
    </body>
</html>