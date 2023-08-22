<?php
// clone*
// construct*
// invoke
// tosstring
// get
// set

class Pessoa 
{
    private $dados = array();

    // metodo set, sem que seja necessário chamar uma função para declarar o valor
    public function __set($nome,$valor){
        $this->dados[$nome] = $valor;
    }

    // metodo get, retorna o valor sem que precise chamar a função
    public function __get($nome){
        return $this->dados[$nome];
    }

    // defini o que sera retornado, em string, quando o objeto da classe for impresso, 
    public function __toString(){
        
        return "tentou imprimir o objeto pessoa";
    }
    // caso utilize o objeto como função -> objeto() -> return this bellow 
    public function __invoke($par,$set){
        $nome = $par;
        $nome = $set;

        return "imprimindo objeto como função para $nome";
    }
}

$pessoa = new Pessoa();
// passando o indice e seu valor para a var dados; 
$pessoa->nome = 'andriw';
$pessoa->idade = 17;
$pessoa->sexo = 'M';

// exibindo os valores pelos indices com o metodo get
echo $pessoa->nome.'<br>';
echo $pessoa->idade.'<br>';
echo $pessoa->sexo.'<br>';

print($pessoa('andriw','ferreira'));
// var_dump($pessoa);

?>
