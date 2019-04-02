<?php
    namespace Atec;
    class Gestor
    {
        var $N_Conta;
        var $Nome_Titular;
        var $Data_Criação;
        var $Saldo;

        function __construct(){
            $this->N_Conta = uniqid();
            $this->Nome_Titular = "";
            $this->Data_Criação = date('d/m/y');
            $this->Saldo = 0.0;
        }
        
        //Get e Set
        // retorna o Guid da conta
        function GetNConta() : string{
            return $this->N_Conta;
        }
        //retorna o Nome titular
        function GetTitular() : string{
            return $this->Nome_Titular;
        }
        //retorna a data de criação da conta
        function GetCriacaoData() : string{
            return $this->Data_Criação;
        }
        //retorna saldo
        function GetSaldo() : float{
            return $this->Saldo;
        }
        // Valida se o nome do titular nao é null ou não esta vazio
        function SetTitular($titular){
            if(strlen($titular) > 0 && $titular != null){
                $this->Nome_Titular = $titular;
            }else{
                echo "Nome não é Válido!";
            }
        }
        function InfoReturn() : string{
            return "<br>Id : " . $this->N_Conta . "<br>Titular : " . $this->Nome_Titular . "<br>Criado a : " . $this->Data_Criação . "<br>Saldo : ". (string)$this->Saldo;
        }
    }
    class Movimentos
    {
        var $Data;
        var $tipo;
        var $valor;
        var $Cliente;

        function __construct()
        {
            $this->data = date('d/m/y');
            $this->tipo = "";
            $this->valor = 0.0;
            $this->Cliente = new Gestor();
        }
        
    }
?>