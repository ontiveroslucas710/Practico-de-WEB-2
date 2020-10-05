<?php

require_once './controller/UserController.php';
//require_once './controller/Controller.php';
require_once './libs/smarty/Smarty.class.php';

class UserView {

    private $title;

    function __construct(){
        $this->smarty = new Smarty();
    }
    
    //####### FUNCIONES PRINCIPALES DEL LOGIN ########
  
//si tipea con errores le mando mensaje
    function nuestroRegistro($mensaje = ""){
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('templates/registrar.tpl');

    }
    
//si se conecta lo mando a la home con el nombre en el header
    function volverALaHome($mensaje = ""){
        $this->smarty->assign('mensaje', $mensaje);
        header("Location: ".BASE_URL);
    }


  
    
    
    
}

