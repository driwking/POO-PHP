<?php
class Cadastro{
    
    private $nome;
    private $valor;
    
    private $endereco;

    public function __construct($nome,$valor,$endereco){
        $this->setNome($nome);
        $this->setValor($valor);
        $this->setEndereco($endereco);
    }

    public function getNome(){
        return $this->nome;
    }
    
    public function getValor(){
        return $this->valor;
    }
    
    public function getEndereco(){
        return $this->endereco;
    }

    public function setNome($n){
        $this->nome = $n;
    }
    
    public function setValor($v){
        $this->valor = $v;
    }
    
    public function setEndereco($e){
        $this->endereco = $e;
    }

    function Cadastrar(){
        echo $this->nome . " foi cadastrao com sucesso";
    }
    
}

$produto = new Cadastro("lata de feijão","R$ 22,90","Rua acre 201");
$produto->Cadastrar();



?>