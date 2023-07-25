<?php

interface LoginWeb
{
    public function entrar();
    public function sair();
    public function esqueciSenha();

}

class Pagina implements LoginWeb
{

    public function entrar()
    {
        // Lógica para entrar 
    }
    public function sair()
    {
        // Lógica para sair
    }
    public function esqueciSenha()
    {
        // Lógica para recueprar senha
    }


}


?>