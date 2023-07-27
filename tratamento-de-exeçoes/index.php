<?php
// Exeção - Ocorrências anormal que afeta o funcionamento de uma aplicação
// Excepetion é a classe base para todas as excepetions

//parametro-> message, code, file, line

class NewSlater
{
    public function CadastrarEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            // defindo uma exeção
            throw new Exception("Este email é invalido",1);
        }else{
            echo "Email cadastrado";
        }
    }
}
$NewStaler = new NewSlater();
// try e catch para tratar uma exeção caso ela não seja válida

try {
$NewStaler->CadastrarEmail("andrwi@gmailm");
} catch(Exception $e)
{
    // obtendo a mensagem da exceção
    echo "Mensagem: ".$e->getMessage()."<br>";
    echo "Código: ".$e->getCode()."<br>";
    echo "Linha: ".$e->getLine()."<br>";
    echo "Arquivo: ".$e->getFile()."<br>";
}



?>