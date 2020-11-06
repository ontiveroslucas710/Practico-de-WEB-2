<?php
require_once './model/ModelMarca.php';
require_once './model/ModelPantalones.php';
require_once './view/View.php';

class controllerAdministradores{
    private $model;
    private $ModelPantalones;
    private $modelMarca;
    private $view;
    private $modelComentarios;
    function __construct(){
        $this->view= new View();
        $this->modelMarca= new ModelMarca();
        $this->modelUsuario = new UserModel();
        $this->ModelPantalones= new ModelPantalones();
    }
    private function checkLoggedInAdmin(){
        if(session_status() !== PHP_SESSION_ACTIVE){
            session_start();
        }
        if(!isset($_SESSION["USERNAME_admin"])){
            $this->view->irARegistrar();
            die();
        }
    }


    function mostrarTablaAdministradores(){
        $this->checkLoggedInAdmin();
        $dato = $this->modelUsuario->getAllUsuarios();
        if(isset($_SESSION['USERNAME_admin']) == $dato->nombre){
            var_dump("es el mismo nombre");
        }
        die();
       
    }

}