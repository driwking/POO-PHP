<?Php

class Cachorro{
    public $nome;
    public $raca;
    public $peso;
    public $idade;
    
    public function Latir(){
        echo $this->nome." da raça ".$this->raca." com ".$this->peso." kg, de".$this->idade." anos"." latiu<br>";
    }
}

$cachorro = new Cachorro;
$cachorro->nome = "Mel";
$cachorro->raca = "Labrador";
$cachorro->peso = 80;
$cachorro->idade = 14;

$cachorro->Latir();
var_dump($cachorro);

?>