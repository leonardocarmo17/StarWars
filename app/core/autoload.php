<?php
spl_autoload_register(function ($class) {
    $classPath = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    $baseDir = __DIR__ . '/../../';
    $filePath = $baseDir . $classPath . ".php";

    if (file_exists($filePath)) {
        require_once $filePath;
    } else {
        throw new Exception("O arquivo da classe {$class} não foi encontrado: {$filePath}");
    }
});
