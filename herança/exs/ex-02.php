<?php

class Banco {

    private $email;
    private $senha;
    private $valores;
    public function __construct($email,$senha,$valores){
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setValores($valores);
    }

    public function getEmail(){
        return $this->email;
    }
    
    public function getSenha(){
        return $this->senha;
    }
    
    public function getValores(){
        return $this->valores;
    }

    public function setEmail($e){
        $this->email = $e;
    }
    
    public function setSenha($s){
        $this->senha = $s;
    }
    
    public function setvalores($v){
        $this->valores = $v;
    }

    public function Cadastrar(){
        echo "conta cadastrada<br>";
    }
}

class Fixo extends Banco{
    public $tipoDinheiro;
}

class Digital extends Banco{

    public $tipoDinheiro;

}

$nubank = new Digital('email@teste.com','1234567',1200.00);
$nubank->tipoDinheiro = 'pix';
$nubank->Cadastrar();

$itau = new Fixo("itauteste@gmail.com","1234567",400.00);
$itau->tipoDinheiro = 'Real';
$itau->Cadastrar();


?>