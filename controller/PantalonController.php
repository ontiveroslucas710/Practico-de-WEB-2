<?php
require_once './model/ModelMarca.php';
require_once './model/ModelPantalones.php';
require_once './view/View.php';

class PantalonController{
    private $model;
    private $ModelPantalones;
    private $modelMarca;
    private $view;

    function __construct(){
        $this->view= new View();
        $this->modelMarca= new ModelMarca();
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

    private function checkLoggenInUsuarioComun(){
        if(session_status() !== PHP_SESSION_ACTIVE){
            session_start();
        }
        if(!isset($_SESSION["USERNAME_usuario"])){
            $this->view->irARegistrar();
            die();
        }
    }
    
    //####### FUNCIONES PARA MOSTRAR DIRECTAMENTE SIN GENERAR ACCIONES ##########
    //funcion para ver home
    function home(){
        $this->view->nuestraHome();
    }    
    //funcion para mostrar nuestros pantalones y a su vez genera la lista de marca
    function MostrarPantalones(){
        $dato=$this->modelMarca->getMarca();
        $this->view->ListaPantalonesPorMarca($dato);
    }    
    //funcion para mostrar Lista de Pantalones y la tabla completa
    function mostrarTabla(){      
        $dato=$this->ModelPantalones->getPantalones();
        $datoMarca = $this->modelMarca->getMarca();
        $this->view->listaDePantalones($dato, $datoMarca);            
    }    
     //Tanto showFromEdit como Edit sirven para poder editar el elemento seleccionado
     function showFormEditPantalon($params){
        $this->checkLoggedInAdmin();
        $id_editar= $params[':ID'];
        $dato = $this->ModelPantalones->getById($id_editar);
        $datomarca = $this->modelMarca->getMarca();
        $this->view->mostrarFormularioEditarPantalon($dato,$datomarca);
    }

    function showFormEditMarca($params){
        $this->checkLoggedInAdmin();
        $id_editarMarca= $params[':ID'];
        $datoMarca = $this->modelMarca->getByEditMarca($id_editarMarca);
        $this->view->mostrarForumarioEditarMarca($datoMarca);
    }
    //############## FUNCIONES ESPECIALES ##########
    //Filtra las marcas en nuestros pantalones
    function filtrar($params){
        $id =$params[':ID'];
        $dato=$this->modelMarca->getPantalonByMarca($id);
        $this->view->filtroParaMarcas($dato);     
    }
    
    function verMas($params){
        $id =$params[':ID'];
        $dato=$this->ModelPantalones->getPantalonYdescripcion($id);
        $this->view->filtroCompleto($dato);  
    }

    function comentarios($params){
        $id_pantalon= $params[':ID'];
        $dato=$this->ModelPantalones->getById($id_pantalon);
        $this->view->showComentarios($dato);      
    }

}
