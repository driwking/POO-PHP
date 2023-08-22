<?php

// Gerenciador de dependencias do php

// composer init para iniciar o arquivo de dependencias em json

// https://packagist.org -> site com libs em php com dependencias 



// CONFIGURAÇÃO COMPOSER INIT


// This command will guide you through creating your composer.json config.

// Nome do pacote em lower case
// Package name (<vendor>/<name>) [andri/composer]: // resposta = nome que daremos nome_do_projeto/composer

// Descrição do que é
// Description []: teste do composer

// Nome do author no formato nome do autor <email>
// Author [andriw aparecido <andriw@gmail.com>, n to skip]: andriw aparecido <andriw@gmail.com>

// Versão estavel do meu projeto
// Minimum Stability []: // possiveis valores:  stable, RC, beta, alpha, 

// Tipo de pacote 
// Package Type (e.g. library, project, metapackage, composer-plugin) []: project

// Licensa
// License []:

// Outras dependencias, caso o projeto utilize outra como exemplo um framework ou banco de dados ou um ORM

// Would you like to define your dependencies (require) interactively [yes]? yse
// Search for a package: nome do pacote dompdf/dompdf 

// Versão do pacote, em branco por padrão é instalado a última versão 
// Enter the version constraint to require (or leave blank to use the latest version):

// Retorna para inserir outras dependencias caso tenha
// Search for a package:

// definir suas dependencias para o ambiente de desemvolvimento?
// Would you like to define your dev dependencies (require-dev) interactively [yes]?

// caso queira utilizar o autoload psr-4 para carregamento das classes principal do projeto
// Add PSR-4 autoload mapping? Maps namespace "TesteDoComposer\Composer" to the entered relative path. [src/, n to skip]:

// arquivo de depencias gerado

// {
//     "name": "teste_do_composer/composer",
//     "description": "teste do composer",
//     "type": "project",
//     "require": {
//         "dompdf/dompdf": "^2.0"
//     },
//     "autoload": {
//         "psr-4": {
//             "TesteDoComposer\\Composer\\": "src/"
//         }
//     },
//     "authors": [
//         {
//             "name": "andriw aparecido",
//             "email": "andriw1919@gmail.com"
//         }
//     ],
//     "minimum-stability": "beta"
// }

// sim para confirmar
// Do you confirm generation [yes]? yes


// Deseja instalar as dependencias que serão utilizado? sim se for utilizar as lib citadas
// Would you like to install dependencies now [yes]? yes




// composer.lock ficam as dependencias instaladas
echo require 'composer.lock';
echo '<hr>';

// composer.json a minha dependencia
echo require 'composer.json'

// vendor fica os pacotes de terceiros a serem utilizados no projeto

// caso queira instalar outras dependecias no mesmo projeto
// basta utilizar o comando no terminal dentro das pasta do projeto o comanod
// compose require nome do pacote
// exe: composer require pagseguro/pagseguro-php-sdk


// Para remover um pacote basta retirar do arquivo composer.json do objeto require
// Depois utilize o comando composer udpate para remover por completo


?>