<?php

class CadastroDeProduto{
    private $nome;
    private $codigo;
    private $valor;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($n){
        $this->nome = $n;
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($c){
        $this->codigo = $c;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setValor($v){
        $this->valor = $v;
    }

    public function cadastrado(){
        if($this->nome != NULL && $this->codigo != NULL){
            echo "produto já cadastrado <br>";
        }else{
            echo "cadastrado com sucesso <br>";
        }
    }

}

$produto = new CadastroDeProduto;
$produto->setNome("carro");
$produto->setCodigo("02020s");
$produto->setvalor(12000);
$produto->cadastrado();

echo $produto->getValor().": Valor <br>";

echo $produto->getCodigo().": Código <br>";

echo $produto->getNome().": Nome <br>";




?>