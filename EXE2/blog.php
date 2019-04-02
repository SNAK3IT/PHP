<?php
require __DIR__ ."/vendor/autoload.php";
use Main\Utilizadores;
use Main\Post;
use Main\Comentarios;
    
    $utilizador = new Utilizadores();
    $utilizador->SetNome("Pedro");
    $utilizador->SetUser("P3dru");
    $utilizador->SetEmail("asd@asd.com");
    $Comentario = new Comentarios();
    $Comentario->SetMensagem("Ola tudo Bem");
    $Comentario->Utilizador =  $utilizador->GetNome();
    $Post = new Post("Titulo asdsa", "Conteudo asdsa",$Comentario);
    echo $utilizador->imp();
    echo $Comentario->imp();
    
?>