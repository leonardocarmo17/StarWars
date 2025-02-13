<?php

session_start();

require_once '../app/core/init.php';
use App\Core\App;

if(DEBUG){
    ini_set('display_erros', 1);
}
else{
    ini_set('display_erros', 0);
}

$app = new App();
$app->loadController();

