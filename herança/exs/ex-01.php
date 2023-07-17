<?Php

class instrumentos{
    public $notas;
    public $nome;
    public $cor;
    public $tamanho;

    public function Tocar(){

        echo "<br> o(a) $this->nome faz: ";

                 
        foreach(explode(" ",$this->notas) as $i){
            echo $i." ";
        }

    }

}


class Cordas extends instrumentos{
    public $qtdCordas;

    public function la(){
        echo "<br> lá lá laá <br>";
    }
}
class Sopros extends instrumentos{
    public $qtdBuraco;
    
    public function flu(){
        echo "<br> flu flu fluu<br>";
    }
}

class Percucao extends instrumentos{
    public $qtdCaixa;

    function Bum(){
        echo "<br>  bum bum buum <br>";
    }
}

$violino = new Cordas();
$violino->nome = "violino";
$violino->qtdCordas = 4;
$violino->notas = "sol ré lá mi";
$violino->cor = "laranjada fosco";~
$violino->tamanho = 4/4;
$violino->la();

$violino->tocar();

echo "<hr>";

$flauta = new Sopros();
$flauta->nome = "flauta doce";
$flauta->qtdBuraco = 9;
$flauta->notas = "lá mi sol fa";
$flauta->cor = "cinza cromado";
$flauta->tamanho = 70;
$flauta->flu();

$flauta->Tocar();

echo "<hr>";

$bateria = new Percucao();
$bateria->nome = "bateria";
$bateria->qtdCaixa = 5;
$bateria->notas = "dó ré sol";
$bateria->cor = "azul escuro";
$bateria->tamanho = "grande";
$bateria->Bum();

$bateria->Tocar();


echo "<hr>";
var_dump($violino,$flauta,$bateria);

?>