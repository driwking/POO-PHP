<?php
// Composição -  uma classe cria a instancia de outra classe dentro de si mesmo, quando ela for destuirda a outra também será
// relação de uma para um

class Pessoa
{
    public function atribuirNome($nome)
    {
        return "o nome da pessoa é " . $nome;
    }
}

class Exibir
{
    public $pessoa;
    public $nome;   

    function __construct($nome){

        $this->pessoa = new Pessoa();
        $this->nome = $nome; 
    }
    
    public function exibirNome()
    {
        echo $this->pessoa->atribuirNome($this->nome);
    }
}

$pessoa = new Pessoa();
$exibir = new Exibir("andriw");
$exibir->exibirNome();
?>