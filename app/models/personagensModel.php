<?php

namespace App\Models;

use App\Models\ApiModel;

class personagensModel{
    private $apiModel;
    public function __construct()
    {
        $this->apiModel = new ApiModel();
    }
    public function personagensDetalhes() {
        $filmes = $this->apiModel->buscarFilmes();

        $todosPersonagens = [];
        
        foreach ($filmes['results'] as $filme) {
            if (isset($filme['characters'])) {
                $todosPersonagens = array_merge($todosPersonagens, $filme['characters']);
            }
        }
        $todosPersonagens = array_unique($todosPersonagens);
        $personagensDetalhes = $this->apiModel->buscarPersonagensParalelo($todosPersonagens);
        
        return $personagensDetalhes;
    }
}