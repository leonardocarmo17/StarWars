<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;

class dados extends Controller{
    private $db;

    public function __construct(){
        $this->db = new Database();
    }
    public function index(){
        $dados = $this->db->bancoDados();
        $this->view('dados', ['logs' => $dados]);
    }
}