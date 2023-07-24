<?php

class Pessoa {
    const nome = "Andriw";

    public function exibirNome(){
        // self refere-se a própria classe
        echo self::nome;
    }
}

class Andriw extends Pessoa {
    const nome ="Aparecido";

    public function exibirNome(){
        echo self::nome."<br>";
        //elemnteo pai
        echo parent::nome; // -> Andriw
    }
}

// mesmo herdadndo os metodos, o self faz referencia a prépria classe.
// parente refere ao pai dessa classe
$pessoa = new Andriw();
$pessoa->exibirNome();



?>