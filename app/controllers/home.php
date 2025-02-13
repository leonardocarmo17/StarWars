<?php 
namespace App\Controllers; 

use App\Core\Controller;
use App\Controllers\ApiController;

class Home extends Controller{
    private $api;
    public function __construct()
    {
    
        $this->api = new ApiController();
    }
 
public function index() {
    $dados = $this->api->dados(); 

    $filmes = $dados['dados'];
    $traduzir = $dados['traduzir'];
    $personagens = $dados['personagem'];
    
    
    $this->view('home', [
        'dados' => $filmes,
        'traduzir' => $traduzir,
        'personagem' => $personagens
    ]);
}
   
}


    

