<?php
date_default_timezone_set('America/Sao_Paulo');

if($_SERVER['SERVER_NAME'] === 'localhost'){
    define('DBNAME', 'log_api');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');

    define('ROOT', 'http://localhost:8000');
}


/* True means show erros */
define('DEBUG', true);


