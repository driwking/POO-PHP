<!--  EXERCICIO DE REVISÃO 1 -->
<?php

class Checkin extends Funcionario{

    public $data;
    public $hora;

    public function __construct($n,$i,$s,$e){
        self::$id += 1;
        self::$nome = $n;
        self::$idade = $i;
        self::setSalario($s);
        self::$endereco = $e;
    }

}

abstract class Funcionario{
    protected static $id;
    public static $nome;
    public static $idade;
    private static $salario;
    protected static $endereco;

    public function __construct($n,$i,$s,$e){
        $this->id += 1;
        self::$nome = $n;
        self::$idade = $i;
        self::setSalario($s);
        // $this->salario = $s;
        self::$endereco = $e;
    }
    protected static function setSalario($s){
        self::$salario = $s;
    }

    public static function getSalario(){
        echo "salario :" . self::$salario . "<br>";
    }

    public static function info(){
        return "Funcionario: ".self::$nome .'<br> Idade: ' . self::$idade . '<br> Salario: '. self::$salario. "," . 000 . '<br> Endereço: '.self::$endereco;
    }

}
// valores definidos por outra classe
$func = new Checkin("andriw",17,1400.00,"rua teste teste");
$func->data = "data: ".date('d/m/Y');
$func->hora = "hora de registro: ".date("h:m:s");
echo $func->data . "<br>";
echo $func->hora . "<br>";

// valores chamados da classe pai
Funcionario::getSalario();
echo Funcionario::info();









?>