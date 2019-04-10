<?php
    $conn = new mysqli("localhost","root","","blog");

    $sql = "INSERT INTO posts(title,body) VALUES(
       '".$_POST['title']."',
       '".$_POST['body']."'
    );";
    $conn->query($sql);
    $conn->close();
    header("location: index.php")
?>