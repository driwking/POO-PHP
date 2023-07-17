<?php

$nome;
$setor;
$salario;

function Tarefa($nome,$setor){
    global $nome, $setor;
    echo $nome."do setor de ".$setor." realizou sua tarefa <br>";
}

function Receber($nome,$salario){
    global $nome,$salario;
    echo $nome." recebeu seu salário de ".$salario."<br><br>";
}

$nome = 'Matheus Cordeiros';
$setor = "Vendas";
$salario = 1300.00;
Tarefa($nome,$setor);
Receber($nome,$salario);

$nome = 'Maria Luisa';
$setor = "Marketing";
$salario = 1400.00;
Tarefa($nome,$setor);
Receber($nome,$salario);




?>