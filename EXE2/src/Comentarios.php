<?php
    namespace Main;
    include_once 'Post.php';
    class Comentarios{
        var $Data;
        var $Mensagem;
        var $Utilizador;
        function __construct()
        {
            $this->Data = date("d/M/y");
            $this->Mensagem = "";
            $this->Utilizador = new Utilizadores();
        }
        
        function SetMensagem($Mensagem){
            if(strlen($Mensagem) > 0 && $Mensagem != null){
                $this->Mensagem = $Mensagem;
            }else{
                echo "Mensagem não é Válido!";
            }
        }
        function GetMensagem(){
           return $this->Mensagem; 
        }
        function GetUti(){
            return $this->Utilizador; 
         }
        function imp(){
            return "<br>Data : " . $this->Data . "<br>Mensagem : " . $this->Mensagem . "<br>" . $this->Utilizador->imp();
        }
    }
?>