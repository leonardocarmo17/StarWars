<?php

namespace App\Core;

class Controller{
    public function view($name, $data = []){
        $filename = '../app/views/'. $name.".view.php";
        
        if(file_exists($filename)){

            extract($data);
            require $filename;
            
        }else{

            $filename = "../app/views/404.view.php";
            require $filename;
        }
    }
    public function redirecionar($URL = '/'){
        header("Location: " . $URL);
        exit();
    }
}