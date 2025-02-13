<?php
namespace App\Models;

class ApiModel {
    public $idade;

    public function buscarFilmes($id = null) {
        $endpoint = "https://swapi.py4e.com/api/films/";
        $url = $id ? $endpoint . $id . '/' : $endpoint;
    
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $response = curl_exec($ch);
        curl_close($ch);
    
        $dados = json_decode($response, true);
    
        if (isset($dados['results'])) {
            $dadosFiltrados = array_map(function ($filme) {
                $anoFilme = isset($filme['release_date']) ? $filme['release_date'] : null;
                $idade = $anoFilme ? $this->calcularIdade($anoFilme) : null;
        
                return [
                    'producer' => $filme['producer'] ?? null,
                    'director' => $filme['director'] ?? null,
                    'episode_id' => $filme['episode_id'] ?? null,
                    'release_date' => $filme['release_date'] ?? null,
                    'characters' => $filme['characters'] ?? null,
                    'idade' => $idade, 
                ];
            }, $dados['results']);
            
            $dados['results'] = $dadosFiltrados;
            return $dados;
        }

        if (isset($dados['characters'])) {
            $dados['personagens'] = $this->buscarPersonagensParalelo($dados['characters']);
        }
        return $dados;
    }

    public function buscarPersonagensParalelo($urls) {

        $multiCurl = [];
        $resultado = [];
        $mh = curl_multi_init(); 

        foreach ($urls as $index => $url) {
            $multiCurl[$index] = curl_init();
            curl_setopt($multiCurl[$index], CURLOPT_URL, $url);
            curl_setopt($multiCurl[$index], CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($multiCurl[$index], CURLOPT_TIMEOUT, 10);
            curl_multi_add_handle($mh, $multiCurl[$index]); 
        }

        do {
            curl_multi_exec($mh, $running);
            usleep(100);
        } while ($running);

        foreach ($multiCurl as $index => $ch) {
            $response = curl_multi_getcontent($ch);
            $personagemDados = json_decode($response, true);
            if (isset($personagemDados['name'])) {
                $resultado[] = $personagemDados['name'];
            }
            curl_multi_remove_handle($mh, $ch); 
        }

        curl_multi_close($mh); 
        return $resultado;
    }

    public function calcularIdade($anoFilme) {
        
        $anoAtual = date("Y-m-d");
        $dataFilme = new \DateTime($anoFilme);
        $dataAtual = new \DateTime($anoAtual);

        $this->idade = $dataAtual->diff($dataFilme);
        if($this->idade->d === 1){
            return $this->idade->y." Anos, ".$this->idade->m." Meses e ".$this->idade->d." Dia";
        }else if($this->idade->m === 1){
            return $this->idade->y." Anos, ".$this->idade->m." Mês e ".$this->idade->d." Dias";
        }else if($this->idade->m === 1 && $this->idade->d === 1){
            return $this->idade->y." Anos, ".$this->idade->m." Mês e ".$this->idade->d." Dia";
        }
        else{
            return $this->idade->y." Anos, ".$this->idade->m." Meses e ".$this->idade->d." Dias";
        }
    }
}
