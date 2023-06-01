<?php 

require __DIR__ . '/vendor/autoload.php';

$loginController = new Controller\LoginController;
echo $loginController->getInfoLogin();

