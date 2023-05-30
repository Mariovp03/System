<?php

namespace Controller;

class LoginController
{
    public function dizer(){
        return "Olá mundo";
    }

   static public function oi($msg){
        session_start();
        echo($msg);
        $_SESSION['email'] = 'mario@mario.com';
        $_SESSION['password'] = 'mario123';
        if($_POST['email'] == $_SESSION['email'] && $_POST['password'] == $_SESSION['password']){
            echo "Olá";
        }
    }
}


?>