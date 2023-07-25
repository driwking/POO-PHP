<!--  Referencia e Clonagem de objetos -->
<?php

class Pessoa
{
    public $idade;

    // define algo quando um objeto é clonado
    public function __clone()
    {
        echo "clonado";
    }
}

$pessoa = new Pessoa();
$pessoa->idade = 17;

// pessoa2 recebe objeto pessoa 
$pessoa2 = $pessoa;
$pessoa2->idade = 20;

// último valor a ser exibido
echo $pessoa->idade;

// clone define um clone sem que altere o valor original do objeto

$pessoa3 = clone $pessoa;
$pessoa3->idade = 40;
echo $pessoa->idade;
?>
