<?php

function load($controller, $action){

    try{
    $controllerNamespace = "Controller\\$controller";

    if(!class_exists($controllerNamespace)){
        throw new Exception("A $controller não existe!");
    }

    $controllerInstance = new $controllerNamespace();

    if(!method_exists($controllerInstance, $action)){
        throw new Exception("O método $action não existe na controller $controller!");
    }

    $controllerInstance->$action();
}catch(Exception $e){
   echo $e->getMessage();
}
}


$routes = [
    "GET" => [
        "/" => load("LoginController", "index"),
        "/home" => load("HomeController", "index")
    ],
    "POST" => [
        "/home" => load("HomeController", "store")
    ],
];