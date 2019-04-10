<?php 
    namespace lib;
    class livros {
        private $isbn;
        private $titulo;
        private $ano;
        private $genero;
        private $autores;

        function Getisbn(){
            return $this->isbn;
        }
        function Gettitulo(){
            return $this->titulo;
        }
        function Getano(){
            return $this->ano;
        }
        function Getgenero(){
            return $this->genero;
        }
        function Getautores(){
            return $this->autores;
        }

        function Setisbn($isbn){
             $this->isbn=$isbn;
        }
        function Settitulo($titulo){
            $this->titulo = $titulo;
        }
        function Setano($ano){
            $this->ano = $ano;
        }
        function Setgenero(autores $genero){
            $this->genero = $genero;
       }
       function Setautores($autores){
           $this->autores = $autores;
       }

       function FormatLivro(array $rowlivro): void 
       {
           Setisbn() = $rowlivro['isbn'];
           Settitulo() = $rowlivro['titulo'];
           Setano() = $rowlivro['ano'];
           Setgenero() = $rowlivro['genero'];
           Setautores() = $rowlivro['autores'];
       }
    }