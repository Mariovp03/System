<?php

namespace Controller;

class LoginController extends Controller
{
    public function validateSenha(){
        session_start();
        $_SESSION['email'] = 'mario@mario.com';
        $_SESSION['password'] = 'mario123';
        if($_POST['email'] == $_SESSION['email'] && $_POST['password'] == $_SESSION['password']){
            echo "Olá";
        }
    }
}


?>