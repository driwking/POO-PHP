<?php
// public -- todos os atributos e metodos são visiveis a acessaveis por todos que à acessarem 
// protected -- permite a visibilidade para os herdeiros como se fosse públicos. Necessario utilizar os metodos getters e setters
// private -- só pode ser visivel para a classe declarada
class Veiculos{
    protected $modelo;
    private $cor; 
    public $ano;


    public function Andar(){
        echo " <br> Andou ! <br> ";
    }

    public function Parar(){
        echo " <br> Parou !! <br> ";
    }
}

// extends define a herança de qual classe deve ser herdada
class Carro extends Veiculos{
    public function LigarLuzes(){
        echo "<br> luzes ligada <br> ";
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($m){
        $this->modelo = $m;
    }
    
    public function getCor(){
        return $this->cor;
    }

    public function setCor($c){
        $this->cor = $c;
    }
    
}

class Moto extends Veiculos{
    public function PuxarNoGrau(){
        echo " <br>Dando grau danranran<br> ";
    }
}

$carro = new Carro();
$carro->setModelo("Uno"); // obteve acesso de um proteced, pois está visel para os herdeiros;
echo $carro->getModelo()."<br>";
$carro->setCor("rosa"); // private, não define na classe cor, e cria uma var na class atual 
echo $carro->getCor();


var_dump($carro)."<br><br>";

// $moto = new Moto();
// $moto->setModelo("twistter");
// echo $moto->getModelo()."<br>";

// var_dump($moto)."<br>";


?>