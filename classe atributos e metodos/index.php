<?php

//exemplo de classe, por padrão e conceito primeira letra maiuculá.
class Pessoa{
    // exemplo de atributo, as caracteristicas da classe
    public $nome;
    public $idade;


    // os metodos, ou funções, são as ações que essa classe executa

    public function Falar(){
        //this refere a instancia atual, ou aos atributos a serem usados
        echo $this->nome." de ".$this->idade." anos, acabou de falar";
    }

}

//instanciando a classe Pessoa/ criando objeto que irá receber os metodos e os atributos da classe

$andriw = new Pessoa();

//atributos
$andriw->nome = 'andriw aparecido';
$andriw->idade = 17;

//metodos
$andriw->Falar();
// echo $andriw->nome;
// var_dump($andriw);



?>