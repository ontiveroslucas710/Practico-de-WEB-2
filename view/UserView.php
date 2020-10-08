<?php

require_once './controller/UserController.php';
require_once './libs/smarty/Smarty.class.php';

class UserView {

    
    function __construct(){
        $this->smarty = new Smarty(); 
        if(session_status() !== PHP_SESSION_ACTIVE){
            session_start();
        }         
        if(isset($_SESSION['USERNAME'])){
            $this->smarty->assign('nombre', $_SESSION['USERNAME']);
        }
    }
    
    //####### FUNCIONES PRINCIPALES DEL LOGIN ########
  
//si tipea con errores le mando mensaje
    function nuestroRegistro($mensaje = ""){
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('templates/login.tpl');
    }
    
//si se conecta lo mando a la home con el nombre en el header
    function volverALaHome(){       
        header("Location: ".BASE_URL."home");
    }
    function volverARegistro(){
        header("Location: ".BASE_URL."login");
    }


  
    
    
    
}

