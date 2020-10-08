<?php
require_once './model/UserModel.php';
require_once './view/UserView.php';

class UserController{
    private $model;
    private $view;

    function __construct(){
        $this->view= new UserView();
        $this->model= new UserModel();
    }   

     function mostrarRegistro(){
        $this->view->nuestroRegistro();
    }

    function verificaForm(){
        $nombre= $_POST['usuario'];
        $contraseña= $_POST['contraseña'];  
        
        if(isset($nombre)){
            $BDusuario= $this->model->getusuario($nombre);
            if(isset($BDusuario) && $BDusuario){                
                if(password_verify($contraseña, $BDusuario->password)){
                    session_start();
                    $_SESSION['USERNAME']= $BDusuario->nombre;
                    $this->view->volverALaHome();                    
                }else{
                    $this->view->nuestroRegistro("Contraseña Incorrecta");                   
                }
            }else{
                $this->view->nuestroRegistro("el usuario no existe");             
            }
        }     
    }

    function logout(){
        session_start();
        session_destroy();
        $this->view->volverARegistro();
    }
    
}
