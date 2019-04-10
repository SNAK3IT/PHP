<?php 
    namespace lib;
    class autores {
        private $Nome;
        private $nacionalidade;

        function GetNasc(){
            return $this->nacionalidade;
        }
        function GetNome(){
            return $this->Nome;
        }
        function SetNasc($nasc){
             $this->nacionalidade=$nasc;
        }
        function SetNome($nome){
            $this->Nome = $nome;
        }
    }