<?php
    namespace web; 
    class ConnectionDB{
        private $conn;
        private $result;
        function __construct()
        {
            $this->conn = new mysqli('127.0.0.1','root','','pflda');
        }
        function CreateTable(string $table) : string{
            $ConstQuery = "CREATE TABLE " . $table . ";";
            if(!$this->conn){
                $this->result = "Não consegui conectar a basedados!!!";
            }
            $this->result = $this->conn->query($ConstQuery);
            return $this->result;
        }
    }
?>