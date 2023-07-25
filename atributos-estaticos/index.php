<?php


class Login1 {

     // o static faz com que não necessite instanciar a classe -> Login()
    //Nome da Classe:: metodo() ou atributo;
    public static $user;
    public static function verificaLogin(){

        //this apenas para metodos e atibutos não estaticos, para isso se útiliza o self::$var;
        echo "<br> Usuario ".self::$user." está logado ";
    }

    public function sairSistema(){
        echo "<br> O úsuario saiu do sistema";
    }
}

Login1::$user = "admim";
echo Login1::$user;
Login1::verificaLogin();

// para metodos e atributos não estaticos
$login = new Login1();
$login->sairSistema();


?>