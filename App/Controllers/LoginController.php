<?php

namespace Controller;

class LoginController extends Controller
{
    public function getInfoLogin(){
        $this->getDataAndValidateLogin();
        $this->getViewLogin();
    }

    public function getViewLogin(){
        $pathLoginTreated = str_replace('Controller','View' , __FILE__);
        echo $this->getView(
            $pathLoginTreated ,
            [
                'email' =>  $_SESSION['email'],
                'password' => $_SESSION['password']
            ] 
        );
    }

    public function getDataAndValidateLogin(){
        session_start();
        $_SESSION['email'] = 'mario@mario.com';
        $_SESSION['password'] = 'mario123';
        if(!empty($_POST)){
            $userEmail = $_POST['email'];
            $userPassword = $_POST['password'];
            if($userEmail == $_SESSION['email'] && $userPassword == $_SESSION['password']){
                echo "Você logou na página";
            }
        }
    }

    public function pageRedirect(){

    }

}

?>