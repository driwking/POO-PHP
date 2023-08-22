<!--  criando de forma manual -->

<!-- 
passos:

- criar um arquivo chamado composer.json
- estrutura 
{
    require{
        "nome do pacote" : "versão"
    }
}

- no cmd -> composer install

-->

<!-- autoload : carregamento de todas as classes das bibliotecas -->

<?php

// utilizando a biblioteca slug, que transforma string e url amigaveis

require_once 'vendor/autoload.php';

// definindo namespace
use Cocur\Slugify\Slugify;


$slug = new Slugify();
$slug->addRule('pão','adicionando uma regra');
echo $slug->slugify('pão'); // adicionando uma regra    
echo $slug->slugify('utilizando acentuação como texte, avião, é'); // utilizando-acentuacao-como-texte-aviao-e-atat

echo $slug->slugify('mudando o separador','@'); // mudando@o@separador


?>