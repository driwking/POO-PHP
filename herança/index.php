<?php
// Herança permite que classes compartilhem atributos e metodos, para aprovietas códigos ou comportamentos comuns

class Veiculos{
    public $modelo;
    public $cor;
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
}

class Moto extends Veiculos{
    public function PuxarNoGrau(){
        echo " <br>Dando grau danranran<br> ";
    }
}

$carro = new Carro();
$carro->modelo = "Uno";
$carro->cor = "cromado";
$carro->ano = 2010.00;

$carro->Andar();
$carro->LigarLuzes();

var_dump($carro)."<br><br>";

$moto = new Moto();
$moto->modelo = "twistter";
$moto->cor = "vermelha";
$moto->ano = 2008.00;

$moto->Parar();
$moto->PuxarNoGrau();

var_dump($moto)."<br>";


?>