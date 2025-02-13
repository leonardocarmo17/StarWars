<?php
 
namespace App\Controllers;
use App\Core\Controller;

class _404 extends Controller{
    public function index(){
        $this->view(404);
    }
}
