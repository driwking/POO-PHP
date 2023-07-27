<?php

class Site 
{
    public $dominio;
    public $response = 
    
    "
    [
        'id': '1';<br>
        object{<br>
            name: 'browser',<br>
            value : 'active',<br>
            for: true,<br>
        }
    ]
    ";

    protected $request;
    private $license;

    public function setResponse($Res){
        if($Res === "http://test.com.br")
        {
        
            print( $this->response);

        }else
        {
            throw new Exception("Bad request",402);
        }


    }


}


$resquest = new Site();

// Executando códico da Exceção

try{

    $resquest->setResponse('http://test.co.br');
    
}catch(Exception $e){
    // Obtendo a mensage da exceção
    echo "Mensagem: ".$e->getMessage().'<br>';
    echo "Código de erro: ".$e->getCode();
}



?>