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
    //####### FUNCIONES PARA MOSTRAR DIRECTAMENTE SIN GENERAR ACCIONES ##########
    //funcion para ver home
    function logearse(){
        $this->view->muestralogin();
    }

    function cargarlogin(){
        $nombre=$_POST['usuario'];
        $contra=$_POST['contraseña'];
        $hash = password_hash($contra, PASSWORD_DEFAULT);        
        $this->model->cargaUsuario($nombre, $hash);       
        $this->view->cargar();
    }


    function mostrar(){
        $this->view->verificar();
    }

    function verificaForm(){
        $nombre= $_POST['usuario'];        
        $contraseña= $_POST['contraseña'];     
           
        if(isset($nombre)){
            $BDnombre= $this->model->getusuario($nombre);
                    
            if(isset($BDnombre)){                
                if(password_verify($contraseña, $BDnombre->password)){
                    session_start();
                    $_SESSION['ID_USER']= $BDnombre->id;
                    $_SESSION['USERNAME']= $BDnombre->nombre;
                    $this->view->verificar();
                }else{
                    $this->view->error();
                }
            }else{
                $this->view->error("carga los input");

            }
        }

    }

    
    
    
}
