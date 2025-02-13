<?php
namespace App\Models;
class Tradutor{
    
    public function __construct()
    {
       
    }
    public function traduzirHome($dados) {
      
        $traduzirHome = array_map(function($item) {
            return array_intersect_key($item, array_flip(['title','opening_crawl']));
        }, $dados);

        $resultados = [];
        $id = 1;
        
        for ($i = 0; $i < count($traduzirHome); $i++) {
            $traducao = $this->traduzirManualmente($id); 

            if($traducao){
                $resultados[$i] = [
                'title' => $traducao['titulo'],
                'opening_crawl' => $traducao['descricao']
                ];
            }
            $id++;
        }
        return $resultados;
    }
    private $descricao = [
        1 => "É um período de guerra civil. Naves espaciais rebeldes, atacando a partir de uma base secreta, conquistaram sua primeira vitória contra o maligno Império Galáctico. Durante a batalha, espiões rebeldes conseguiram roubar os planos secretos da arma suprema do Império, a ESTRELA DA MORTE, uma estação espacial blindada com poder suficiente para destruir um planeta inteiro. Perseguida pelos agentes sinistros do Império, a Princesa Leia corre para casa a bordo de sua nave estelar, guardiã dos planos roubados que podem salvar seu povo e restaurar a liberdade na galáxia...",
        2 => "É um tempo sombrio para a Rebelião. Embora a Estrela da Morte tenha sido destruída, as tropas imperiais expulsaram as forças rebeldes de sua base secreta e as perseguiram por toda a galáxia. Evitando a temida frota estelar imperial, um grupo de combatentes pela liberdade liderado por Luke Skywalker estabeleceu uma nova base secreta no remoto mundo gelado de Hoth. O malvado lorde Darth Vader, obcecado em encontrar o jovem Skywalker, enviou milhares de sondas remotas para os confins do espaço...",
        3 => "Luke Skywalker retornou ao seu planeta natal, Tatooine, em uma tentativa de resgatar seu amigo Han Solo das garras do vil gangster Jabba, o Hutt. Mal sabe Luke que o IMPÉRIO GALÁCTICO iniciou secretamente a construção de uma nova estação espacial blindada, ainda mais poderosa do que a temida primeira Estrela da Morte. Quando concluída, essa arma suprema representará a ruína certa para o pequeno grupo de rebeldes que luta para restaurar a liberdade na galáxia...",
        4 => "A turbulência tomou conta da República Galáctica. A tributação das rotas comerciais para sistemas estelares periféricos está em disputa. Na esperança de resolver a questão com um bloqueio de naves de batalha mortais, a gananciosa Federação do Comércio interrompeu todo o transporte para o pequeno planeta Naboo. Enquanto o Congresso da República debate interminavelmente essa alarmante cadeia de eventos, o Supremo Chanceler enviou secretamente dois Cavaleiros Jedi, os guardiões da paz e da justiça na galáxia, para resolver o conflito...",
        5 => "Há agitação no Senado Galáctico. Vários milhares de sistemas estelares declararam sua intenção de deixar a República. Esse movimento separatista, sob a liderança do misterioso Conde Dookan, tornou difícil para o número limitado de Cavaleiros Jedi manter a paz e a ordem na galáxia. A Senadora Amidala, antiga Rainha de Naboo, está retornando ao Senado Galáctico para votar na questão crucial de criar um EXÉRCITO DA REPÚBLICA para ajudar os Jedi sobrecarregados...",
        6 => "Guerra! A República está desmoronando sob os ataques do implacável Lorde Sith, Conde Dooku. Há heróis de ambos os lados. O mal está por toda parte. Em um movimento surpreendente, o pérfido líder dos droides, General Grievous, invadiu a capital da República e sequestrou o Chanceler Palpatine, líder do Senado Galáctico. Enquanto o Exército Separatista de Droids tenta fugir da capital sitiada com seu valioso refém, dois Cavaleiros Jedi lideram uma missão desesperada para resgatar o Chanceler capturado...",
        7 => "Luke Skywalker desapareceu. Em sua ausência, a sinistra PRIMEIRA ORDEM surgiu das cinzas do Império e não descansará até que Skywalker, o último Jedi, seja destruído. Com o apoio da REPÚBLICA, a General Leia Organa lidera uma valente RESISTÊNCIA. Ela está desesperada para encontrar seu irmão Luke e obter sua ajuda para restaurar a paz e a justiça na galáxia. Leia enviou seu piloto mais audacioso em uma missão secreta para Jakku, onde um velho aliado descobriu uma pista sobre o paradeiro de Luke..."
        ];     
    private $titulo =[
        1 => "Uma Nova Esperança",
        2 => "O Império Contra-Ataca",
        3 => "O Retorno de Jedi",
        4 => "A Ameaça Fantasma",
        5 => "O Ataque dos Clones",
        6 => "A Vingança dos Sith",
        7 => "O Despertar da Força"
    ];
    public function traduzirManualmente($id = null){
        if (isset($this->descricao[$id]) && isset($this->titulo[$id])) {
            return [
                'titulo' => $this->titulo[$id],
                'descricao' => $this->descricao[$id]
            ];
        }
        return null;
    }
}
