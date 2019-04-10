<?php
    $conn = new mysqli("localhost","root","","blog");

    $sql = "CREATE TABLE if not exists posts(
        id INT unsigned auto_increment primary key,
        title varchar(200),
        body text
    );";

    
    if($conn->query($sql) === true){
        echo "Tabela post criada";
    }else{
        echo "erro a criar tabela post";
    }

    $coment = "CREATE TABLE if not exists coments(
        id INT unsigned auto_increment primary key,
        nome varchar(200),
        coment text,
        id_post INT unsigned
    );";
    
    if($conn->query($coment) === true){
        echo "|| Tabela coments criada";
    }else{
        echo "|| erro a criar tabela coments";
    }
    $conn->close();
?>