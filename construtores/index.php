<?php

// construtor se inicia quando insatncia-se uma clasee, um metodo

class Login {
    private $email;
    private $senha;

    private $nome;

    //construct que é inicializado
    public function __construct($email,$senha,$nome){
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }

    public function getEmail(){
        return $this->email;
    }

    
    public function getSenha(){
        return $this->senha;
    }

    
    public function setEmail($e){
        $this->email = $e;
    }
    
    public function setSenha($s){
        $this->senha = $s;
    }

    public function Logar(){
        if($this->email == "test@gmail.com" and $this->senha == '123456'){
            echo $this->email." foi logado";
        }else{
            echo "falha ao logar";
        }
    }
}


// por definir um constructor, ao criar um objeto torna necessário passar os parâmetros junto da classe
$login = new Login('test@gmail.com','123456','andriw ferreira');
$login->Logar();
echo "<br>".$login->getNome();

?>