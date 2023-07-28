<?php

// Agregação - uma classe precisa de outra para executar uma ação
// relação de um para muitos, um objetos podem ter muitos objetos

class Produtos
{

    public $nome;
    public $valor;

    function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }

}

class Carrinho
{
    public $produtos;

    public function adiciona(Produtos $produto) // definindo que o parametro é uma instancia da classe Produtos, um objeto.
    {
        $this->produtos[] = $produto; // vai ser um array para armazenar os muitos valores da classe Produto
    }   

    public function exibir()
    {
        foreach($this->produtos as $valor)
        {
            var_dump($valor); // objeto com os atributos e valores defiinidos da classe Produtos
            echo "nome do produto: ".$valor->nome.'<br>';
            echo "valor do produto: ".$valor->valor.'<br>';
        }
    }

}

$Produtos = new Produtos("arroz",12.99);

$Carrinho = new Carrinho();
$Carrinho->adiciona($Produtos);
$Carrinho->exibir();


?>