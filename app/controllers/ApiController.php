<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\ApiModel;
use App\Models\Tradutor;
use App\Models\logApi;
use App\Models\personagensModel;

class ApiController extends Controller
{
    private $apiModel;
    private $logApi;
    private $tradutor;
    private $personagens;
    public function __construct()
    {
        $this->tradutor = new Tradutor();
        $this->logApi = new logApi();
        $this->apiModel = new ApiModel();
        $this->personagens = new personagensModel();
        $this->logApi = new logApi();
    }
    
    public function dados() {
        
        $dados = $this->apiModel->buscarFilmes()['results']; 
        $traduzir = $this->tradutor->traduzirHome($dados);
        $personagens = $this->personagens->personagensDetalhes();
        
        return [
            'dados' => $dados,
            'traduzir' => $traduzir,
            'personagem' => $personagens
        ];
    }
    public function salvarLog() {

        $data = json_decode(file_get_contents('php://input'), true);
        if(isset($data['title'])){
            $this->logApi->dadosLog($data['title']);
        }
    }
    
}
