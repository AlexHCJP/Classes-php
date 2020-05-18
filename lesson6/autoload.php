<?php
spl_autoload_register(function ($name){
    $name = str_replace('\\', DIRECTORY_SEPARATOR, $name);
    $path = __DIR__
        . DIRECTORY_SEPARATOR
        . 'classes'
        . DIRECTORY_SEPARATOR
        . $name
        . '.php';
    if(!is_file($path))
    {
        $all = explode( '\\', $name );
        $className = array_pop($all);
        throw new Exception("Class {$className}");
    }
    require_once "./classes/{$name}.php";
});