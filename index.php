<?php 
require 'config.php';
require __DIR__ . '/vendor/autoload.php';
require 'Routes/Router.php';
session_start();
try{
    
    $uri = parse_url($_SERVER["REQUEST_URI"])['path'];

    $request = $_SERVER['REQUEST_METHOD'];

    if(!isset($router[$request])){
        throw new Exception("A rota não existe!");
    }

    if(!array_key_exists($uri, $router[$request])){
        throw new Exception("A rota não existe!");
    }

    $controller = $router[$request][$uri]; 
    
    $controller();
    
} catch(Exception $e){

    $e->getMessage();

}