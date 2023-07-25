<!-- dicionario: sube e super classes, parent, child  -->

<?php

// polimorfismo refere a criação de uma ou mais classes dentro de uma classe pai e as alterações dos metodos e atributos.

// subclasses são as classes filhos e as superclasses o pai.

class Pai
{
    public function DarDeComer(){
        echo "comeu";
    }
}

class Filho_1 extends Pai
{
    public function Comer(){
        echo "filho " ;
        echo $this->DarDeComer();
    }

}

class Filho_2 extends Pai
{
    
    public function DarDeComer(){
        echo "não comeu";
    }
    public function Comer(){
        echo "filho " ;
        echo $this->DarDeComer();
    }

}

$filho = new Filho_2();
$filho->Comer();

?>
