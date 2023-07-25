<?php

require 'nomes/produto.php';
require 'outroDiretorio/produto.php';

// usando: nome do namespace em barras invertidas e o produto sem parenteses.
// O as server para criar um alias
use \nomes\Produto as Apelido;

// para escolhes qual o namespace a ser utilizado, coloca entre barras invertidas
$produto = new \nomes\Produto();
$produto->MostarDetalhes();

echo "<hr>";

// $produto = new Produto();
// $produto->MostarDetalhes();

echo "<hr>";
$produto = new Apelido();
$produto->MostarDetalhes();

?>


<!-- evitar quebras de linhas antes do bloco de php -->
<!-- namespaces é o nomes dados que não se repitam para evitar conflito-->