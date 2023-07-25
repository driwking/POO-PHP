<?php

class Jogos{
    public $nome;
    protected $personagens;
    private $objetivos;

    public function __construct($objetivos){
        $this->objetivos = $objetivos;
    }
    public function Rodada(){
        echo "ganho <br>";
    }

}

class Cartas extends Jogos{
    public $rodadas;

    public function setPersonagens($p){
        $this->personagens = $p;
    }
}

class Fps extends Jogos{
    public $inimigos;
    public $estatico;
    public function setPersonagens($p){
        $this->personagens = $p;
    }

}

$baralho = new Cartas('fazer um lance');
$baralho->nome = "truco";
$baralho->rodadas = 4;
$baralho->setPersonagens('Rainha, Rei, As, Valete');
$baralho->Rodada();

$Fortinite = new Fps('matar todos os player e vencer');
$Fortinite->nome = "Fortinete";
$Fortinite->inimigos = 24;
$Fortinite->setPersonagens('Eu');
$Fortinite->Rodada();
var_dump($baralho,$Fortinite);





?>