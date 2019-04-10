<?php 
    namespace lib;
    class dvdvideo {
        private $id;
        private $titulo;
        private $ano;
        private $genero;
        private $estudio;
        private $realizador;
        private $atores;
        private $tipo;

        function Getid(){
            return $this->id;
        }
        function Gettito(){
            return $this->titulo;
        }
        function Getano(){
            return $this->ano;
        }
        function Getgenero(){
            return $this->genero;
        }
        function Getestudio(){
            return $this->estudio;
        }
        function Getrealizador(){
            return $this->realizador;
        }
        function Getatores(){
            return $this->atores;
        }
        function Gettipo(){
            return $this->tipo;
        }

        function Setid($id){
            $this->id=$id;
       }
        function Settitulo($titulo){
             $this->titulo=$titulo;
        }
        function Setano($ano){
            $this->ano = $ano;
        }
        function Setgenero($genero){
            $this->genero=$genero;
       }
       function Setestudio($estudio){
           $this->estudio = $estudio;
       }
       function Setrealizador($realizador){
        $this->realizador=$realizador;
       }
       function Setatores($atores){
           $this->atores = $atores;
       }
       function Settipo($tipo){
           $this->tipo=$tipo;
       }
       function Formatvideo(array $row): void 
       {
        Setid() = $row['id'];
        Settitulo() = $row['titulo'];
        Setano() = $row['ano'];
        Setgenero() = $row['genero'];
        Setrealizador() = $row['realizador'];
        Setatores() = $row['atores'];~
        Settipo() = $row['tipo'];
       }
    }