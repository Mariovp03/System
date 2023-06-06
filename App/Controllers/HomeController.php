<?php

namespace Controller;

class HomeController extends Controller
{
    public function index(){
        $this->getData();
        $this->getViewHome();
    }

    public function getData(){
        session_start();
        $_SESSION['nome'] = 'Mário';
        $_SESSION['sobrenome'] = 'do Vale Pereira';
    }

    public function getViewHome(){
        $pathHomeTreated = PATH_BASE_VIEW . "HomeView.php";
        echo $this->getView(
            $pathHomeTreated ,
            [
                'nome' =>  $_SESSION['nome'],
                'sobrenome' => $_SESSION['sobrenome']
            ] 
        );
    }

    public function store(){
        
    }

}

?>