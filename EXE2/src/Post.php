<?php
    namespace Main;
        include_once 'Utilizadores.php';
        include_once 'Comentarios.php';
    class Post{
        var $Data;
        var $Titulo;
        var $Conteudo;
        var $Comentarios;
        var $Autor;
        function __construct()
        {
            $this->Data = date("d/M/y");
            $this->Titulo = "";
            $this->Conteudo= "";
            $this->Comentarios = new Comentarios();
            $this->Autor = new Utilizadores();
        }
        
        function SetTitulo($Titulo){
            if(strlen($Titulo) > 0 && $Titulo != null){
                $this->Titulo = $Titulo;
            }else{
                echo "Titulo não é Válido!";
            }
        }
        function SetConteudo($Conteudo){
            if(strlen($Conteudo) > 0 && $Conteudo != null){
                $this->Conteudo = $Conteudo;
            }else{
                echo "Username não é Válido!";
            }
        }
        function GetTitulo(){
           return $this->Titulo; 
        }
        function GetConteudo(){
            return $this->Conteudo;
        }
        function GetAutor(){
            return $this->Autor;
        }
        function imp(){
            return "<br>Data : " . $this->Data . "<br>Titulo : " . $this->Titulo . "<br>Conteudo : " . $this->Conteudo . "<br>Comentarios : " . $this->Comentarios . "<br>Autor : " . $this->Autor->GetUsername() ;
        }
    }
?>