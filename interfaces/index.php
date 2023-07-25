<!-- modelo a ser usado por outras classe -->

<?php

interface Crud
{
    // metodos que serão usados por outras classes
    public function create();   
    public function read();
    public function update();
    public function delete();
    
}

// implements em vez de extends para herdar uma interface modelo
// com implements, é forçado a declaração dos metodos 
class Noticias implements Crud
{
    public function create()
    {
        // Lógica para criar uma nóticia
    }
    public function read()
    {
        // Lógica para ler uma nóticia
    }
    public function update()
    {
        // Lógica para atualizar uma nóticia
    }
    public function delete()
    {
        // Lógica para deletar uma nóticia
    }
}




?>