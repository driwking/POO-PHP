<?php
// associação - utilização de entrre objetos sem depedências
// relação de muitos para muitos

class Pedido
{
    public $numero;
    public $cliente;
}

class Cliente
{
    public $nome;
    public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Andriw";
$cliente->endereco = "Rua São Lorenso";

$pedido = new Pedido();
$pedido->numero = '123';
$pedido->cliente = $cliente; // associação do objeto cliente e pedido


$dados = array(
    'némero' => $pedido->numero,
    'nome_cliente' => $pedido->cliente->nome, // dados de outro objeto
    'endereco' => $pedido->cliente->endereco,
);

var_dump($pedido);

?>