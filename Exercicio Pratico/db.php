<?php
    $conn = new mysqli("localhost","root","","lib");
    if(!$conn){echo "Erro de conexão a Basedados";}

    $sql = "CREATE TABLE IF NOT EXISTS livro(
        isbn INT unsigned primary key,
        ano Int,
        genero varchar(100),
        autores varchar(200)
    );";
    if($conn->query($sql) === true){
        echo "|| Tabela livro criada";
    }else{
        echo "|| erro a criar livro coments";
    }

    $sql = "CREATE TABLE IF NOT EXISTS  disco_music(
        id Int AUTO_INCREMENT primary key,
        titulo varchar(200),
        ano Int,
        genero varchar(100),
        musicos varchar(200)
    );";

    if($conn->query($sql) === true){
        echo "|| Tabela disco criada";
    }else{
        echo "|| erro a criar a tabela disco";
    }

    $sql = "CREATE TABLE IF NOT EXISTS  disco_video(
        id Int AUTO_INCREMENT primary key,
        titulo varchar(200),
        ano Int,
        genero varchar(100),
        estudio varchar(200),
        realizador varchar(200),
        atores varchar(200)
    );";

    if($conn->query($sql) === true){
        echo "|| Tabela disco_video criada";
    }else{
        echo "|| erro a criar a tabela disco_video";
    }
    $sql = "CREATE TABLE IF NOT EXISTS  autores(
        id Int AUTO_INCREMENT primary key,
        nome varchar(200),
        nacionalidade varchar(200)
    );";

    if($conn->query($sql) === true){
        echo "|| Tabela autores criada";
    }else{
        echo "|| erro a criar a tabela autores";
    }
    $conn->close();
?>