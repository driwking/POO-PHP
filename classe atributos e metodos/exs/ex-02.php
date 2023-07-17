<?php

class Funcionarios{

    public $nome;
    public $setor;
    public $salario;
    

    public function Tarefa(){
        echo $this->nome."do setor de ".$this->setor." realizou sua tarefa <br>";
    }

    public function Receber(){
        echo $this->nome." recebeu seu salário de ".$this->salario."<br><br>";
    }

}

$matheus = new Funcionarios;
$matheus->nome = 'Mathues Cordeiros';
$matheus->setor = 'Vendas';
$matheus->salario =  1300.00;

$maria = new Funcionarios;
$maria->nome = 'Maria Luisa';
$maria->setor = 'Marketing';
$maria->salario = 1400.00;

$matheus->Tarefa().$matheus->Receber();
$maria->Tarefa().$maria->Receber();



?>