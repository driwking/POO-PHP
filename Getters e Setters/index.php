<?php

class Login{

    // não podem ser acessados diretamente por fora, deixam os dados mais seguro
    private $email;
    private $senha;

    // getters, enviam os dados "privados" para fora
    public function getEmail(){
        return $this->email;
    }
    // setters, recebem os valores e atribuiem aquilo que está no private
    public function setEmail($e){
        //limpando as variaveis de caracteres especiais não permitidos.
        $this->email = filter_var($e,FILTER_SANITIZE_EMAIL);
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($s){
        $this->senha = $s;
    }

    public function Logar(){
        if($this->email == "teste@teste.com" and $this->senha == "123456"){
            echo "Logado com sucesso <br>";
        }else{
            echo "Falha ao logar <br>";
        }

    }

}

$logar = new Login;
// setando valores
$logar->setEmail("teste()@teste.com");
$logar->setSenha("123456");

$logar->Logar();

// obtendo valores
echo $logar->getEmail();
echo $logar->getSenha();

?>