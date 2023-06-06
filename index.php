<?php 
require 'config.php';
require __DIR__ . '/vendor/autoload.php';
require 'Routes/Router.php';

try{
       
    $uri = parse_url($_SERVER["REQUEST_URI"])['path'];
    var_dump($uri);    
    $request = $_SERVER['REQUEST_METHOD'];
 

    if(!isset($router[$request])){
        throw new Exception("A rota não existe!");
    }

    if(!array_key_exists($uri, $router[$request])){
        throw new Exception("A rota não existe!");
    }

    $router[$request][$uri];
    
} catch(Exception $e){

    echo $e->getMessage();

}