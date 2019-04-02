<?php
    namespace Main;
    
    class Utilizadores{
        var $Nome;
        var $Username;
        var $Email;
        function __construct()
        {
            $this->Nome = "";
            $this->Username= "";
            $this->Email= ""; 
        }
        
        function SetNome($nome){
            if(strlen($nome) > 0 && $nome != null){
                $this->Nome = $nome;
            }else{
                echo "Nome não é Válido!";
            }
        }
        function SetUser($user){
            if(strlen($user) > 0 && $user != null){
                $this->Username = $user;
            }else{
                echo "Username não é Válido!";
            }
        }
        function SetEmail($Email){
            $this->Email = $Email;
        }
        function GetNome(){
           return $this->Nome; 
        }
        function GetUsername(){
            return $this->Username;
        }
        function GetEmail(){
           return $this->Email;
        }
        function imp(){
            return "<br>Nome : " . $this->Nome . "<br>Username : " . $this->Username . "<br>Email : " . $this->Email;
        }
    }
?>