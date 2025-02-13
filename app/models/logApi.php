<?php

namespace App\Models;

use App\Core\Database;

class logApi{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function log($solicitacao){
        $datetime = date('Y-m-d H:i:s');
        $con = $this->db->connect();
        $insert = $con->prepare("INSERT INTO logs (data, solicitacao) VALUES (:data, :solicitacao)");
        $insert->execute([
            ':data' => $datetime,
            ':solicitacao' => $solicitacao
        ]);

    }
    public function dadosLog($title) {
        $this->log("Filme Acessado: ". $title);
    }
}