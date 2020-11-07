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
        if(session_status() !== PHP_SESSION_ACTIVE){
            session_start();
        }
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
        $nombre=$_SESSION['USERNAME_admin'];       
        $dato = $this->modelUsuario->getAllUsuarios($nombre);       
        $this->view->showAdministradores($dato);               
    }

    //abria que hacer alguna funcion para que cuando elimines
    // un usuario o admin te aparezca estas seguro que quieras borrar?
    function eliminarUsuario($params = null){
        $this->checkLoggedInAdmin();
        $id_usuario = $params[':ID'];
        $this->modelUsuario->deletUsuario($id_usuario);
        $this->view->locationAdministrador();
    }

    function hacerAdmin($params = null){
        $this->checkLoggedInAdmin();
        $admin = 1;
        $id_usuario = $params[':ID'];
        $this->modelUsuario->doItAdmin($admin, $id_usuario);
        $this->view->locationAdministrador();
    }

    function quitarAdmin($params = null) {
        $this->checkLoggedInAdmin();
        $admin = 0;
        $id_usuario = $params[':ID'];
        $this->modelUsuario->removeAdministration($admin, $id_usuario);
        $this->view->locationAdministrador();
    }
}