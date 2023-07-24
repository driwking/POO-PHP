<?php

class Aparelhos{
    public $nome;

    public static $preco;

        // não dá para mesclar o this e o self se o metodo for estatico.
    public function Vender(){
        echo $this->nome. " vendido por :". self::$preco;
    }


}


class Teste extends Aparelhos{

}
$cel = new Aparelhos();
$cel->nome = "celular";
// por herdar a classe parent, é possível utilizar os metodos e atributos da classe parente;

Teste::$preco = 1400;

$cel->Vender();


?>