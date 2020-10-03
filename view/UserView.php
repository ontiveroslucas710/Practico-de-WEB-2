<?php

require_once './controller/UserController.php';
//require_once './controller/Controller.php';
require_once './libs/smarty/Smarty.class.php';

class UserView {

    private $title;

    function __construct(){
        $this->smarty = new Smarty();
        $this->title = "cargar login";
    }
    
    //####### FUNCIONES PRINCIPALES DEL LOGIN ########

    function muestralogin(){
        $this->smarty->assign('titulo', 'listo para logearse');
        $this->smarty->display('templates/login.tpl');

    }
    function verificar($titulo=""){
        
        $this->smarty->assign('titulo' , $titulo);

        $this->smarty->display('templates/login.tpl');

    }
    function cargar(){
        
        $this->smarty->assign('titulo','cargado');
        $this->smarty->display('templates/mensaje.tpl');
    }
    
    
    
}

