<?php 
namespace App\Model;

use PDO;

class Conexao 
{
    private static $instance;

    public static function getCon(){
        if(!isset(self::$instance)){
            // criando uma instacia caso não exista 
            self::$instance = new \PDO('mysql:host=localhost;dbname=pdo;charset=utf8','root','');        
        }

        return self::$instance;
    }
}
?>