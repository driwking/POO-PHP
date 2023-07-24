<?php
// abstração, definem que os metodos e atributos que vão ser herdados só podem ser utilizados pelo herdeiros
// um objeto não pode ser declarado por uma classe abstract, somente pelo filhos.


abstract class Banco2 {

    protected $saldo;
    protected $limiteSaque;
    protected $juros;
    public function setSaldo($s){
        $this->saldo = $s;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    abstract protected function Sacar($s);
    abstract protected function Depositar($d);

}

class Itau extends Banco2{

    public function Sacar($s){
        $this->saldo -= $s;
        echo "sacou: ".$s."<br>";
    }
    
    public function Depositar($d){
        $this->saldo += $d;
        echo "depositou: ".$d.'<br>';
    }

}
class Nubank extends Banco2{

    public function Sacar($s){
        $this->saldo -= $s;
        echo "depositou: ".$s.'<br>';
    }
    
    public function Depositar($d){
        $this->saldo += $d;
        echo "sacou: ".$d.'<br>';
    }

}


$itau = new Itau();
$itau->setSaldo(3400);
echo "<br>saldo :" . $itau->getSaldo().'<br>';
$itau->Sacar(100);
echo "<br>saldo :" . $itau->getSaldo().'<br>';

?>