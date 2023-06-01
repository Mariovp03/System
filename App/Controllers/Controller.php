<?php

namespace Controller;

class Controller{

    public function getView($pathView, $paramVars){
        if(!file_exists($pathView)){
            die("A view não existe ou o caminho dela está errado!");
        }
        ob_start();
        require $pathView;
        extract($paramVars);
        return ob_get_clean();
    }

}