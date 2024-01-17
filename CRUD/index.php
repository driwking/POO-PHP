<!-- criando um crud com PDO -->

<!-- php Data Object -->

<?php
require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto();
$produto->setId(1);
$produto->setNome('Mousepad at');
$produto->setDescricao('tecido otimo');

$produtoDao = new \App\Model\ProdutoDao();

$produto->setNome('Teclado redragon vermelho rbg');
$produto->setDescricao('60 teclas, RGB, bluethooth');
$produtoDao->update($produto);
$produtoDao->delete(1);
print_r($produtoDao->read());
// echo $produtoDao->create($produto)?  'not ok' : 'ok';

?>