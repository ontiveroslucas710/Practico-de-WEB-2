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

        $nombre=$_POST['nombre'];
        $usuario=$_POST['usuario'];
        $contra=$_POST['contra'];
        $hash = password_hash($contra, PASSWORD_DEFAULT);

        $this->model->cargaUsuario($nombre,$usuario,$hash);
        
        $this->view->cargar();
    }
    function mostrar(){
        $this->view->verificar();
    }
    function verificaForm(){
        $nombre= $_POST['nombre'];
        $mail= $_POST['email'];
        $contraseña= $_POST['contraseña'];
        
        if(isset($nombre) && isset($contraseña)){
            $BDnombre= $this->model->getusuario($nombre);
            
            if(isset($BDnombre)){
                
                if(password_verify($contraseña ,$BDnombre->password)){
                    $this->view->verificar("correcto!!!!!!!!!");
                }else{
                    $this->view->verificar("incorrecto .........");
                }
            }else{

                $this->view->verificar("carga los input");

            }
        }

    }

    
    
    
}
