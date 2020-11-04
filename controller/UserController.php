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

     function iniciarsesion(){
        $this->view->formSesion();
    }
    function registrarse(){
        $this->view->formRegistro();
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
                    $this->view->formSesion("Contraseña Incorrecta");                   
                }
            }else{
                $this->view->formSesion("el usuario no existe");             
            }
        }     
    }

    function logout(){
        session_start();
        session_destroy();
        $this->view->volverARegistro();
    }

    function sigin(){
        $nombre= $_POST['usuario'];
        $contraseña= $_POST['contraseña'];
        if(isset($nombre)){
            
            $BDusuario= $this->model->getusuario($nombre);
            
            if($BDusuario->nombre != $nombre){
                $hash = password_hash($contraseña,PASSWORD_DEFAULT);
                $this->model->cargaUsuario($nombre,$hash);
                session_start();
                $usuario=$this->model->getusuario($nombre);
                    $_SESSION['USERNAME']= $usuario->nombre;
                    $this->view->formRegistro("Se registro con exito");
                    
                    $this->view->volverALaHome();
            }else{
                $this->view->formRegistro("El usuario ya existe");
            }
        }
    }
    
}
