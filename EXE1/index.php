<?php 
    require __DIR__ ."/vendor/autoload.php";
    use Atec\Gestor;

    $p = new Gestor();
    $p->SetTitular("pedro");
    echo $p->InfoReturn();
?>