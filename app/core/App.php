<?php
namespace App\Core;

class App {
    private $controller = '_404';
    private $method = 'index';

    private function splitURL() {
        $request = $_SERVER['REQUEST_URI'] ?? '/';
        $request = strtok($request, '?');
        $URL = explode("/", trim($request, "/"));
        return $URL;
    }

    public function loadController() {
        $URL = $this->splitURL();
        
        if(empty($URL) || $URL[0] === ''){
            $controllerName = "home";
        }
        else{
            $controllerName = ucfirst(strtolower($URL[0]));
        }
        $controllerNamespace = "App\\Controllers\\" . $controllerName;
        $filename = "../app/controllers/" . $controllerName . ".php";
        
        
        if (file_exists($filename)) {
            require $filename;
            $this->controller = $controllerNamespace;
        } else {
            $filename = "../app/controllers/_404.php";
            require $filename;
            $this->controller = "App\\Controllers\\_404";
        }

        $controller = new $this->controller;

        $this->method = $URL[1] ?? 'index';
        if (!method_exists($controller, $this->method)) {
            require "../app/controllers/_404.php";
            $this->controller = "App\\Controllers\\_404";
            $controller = new $this->controller;
            $this->method = 'index';
        }

        $params = array_slice($URL, 2);
        call_user_func_array([$controller, $this->method], $params);
    }
}