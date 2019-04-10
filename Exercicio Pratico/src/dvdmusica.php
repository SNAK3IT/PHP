<?php 
    namespace lib;
    class dvdmusica {
        private $id;
        private $titulo;
        private $ano;
        private $genero;
        private $musicos;

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
        function Getmusicos(){
            return $this->musicos;
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
       function Setmusicos($musicos){
           $this->musicos = $musicos;
       }

       function Formatmusic(array $row): void 
       {
        Setid() = $row['id'];
        Settitulo() = $row['titulo'];
        Setano() = $row['ano'];
        Setgenero() = $row['genero'];
        Setmusicos() = $row['musicos'];
       }
    }