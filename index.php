<?php 

require __DIR__ . '/vendor/autoload.php';

$loginController = new Controller\LoginController;
var_dump($loginController->dizer());

