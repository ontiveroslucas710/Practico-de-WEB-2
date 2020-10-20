<?php
require_once './model/Model.php';
require_once './model/ModelPantalones.php';
require_once './view/View.php';

class PantalonController{
    private $model;
    private $ModelPantalones;
    private $view;

    function __construct(){
        $this->view= new View();
        $this->model= new Model();
        $this->ModelPantalones= new ModelPantalones();
    }
    
    private function checkLoggedIn(){
        if(session_status() !== PHP_SESSION_ACTIVE){
            session_start();
        }
        if(!isset($_SESSION["USERNAME"])){
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
        $dato=$this->ModelPantalones->getMarca();
        $this->view->ListaPantalonesPorMarca($dato);
    }    
    //funcion para mostrar Lista de Pantalones y la tabla completa
    function mostrarTabla(){      
        $dato=$this->ModelPantalones->getPantalones();
        $datoMarca = $this->ModelPantalones->getMarca();
        $this->view->listaDePantalones($dato, $datoMarca);            
    }    
     //Tanto showFromEdit como Edit sirven para poder editar el elemento seleccionado
     function showFormEdit($params){
        $this->checkLoggedIn();
        $id_editar= $params[':ID'];
        $dato = $this->ModelPantalones->getById($id_editar);
        $datomarca = $this->ModelPantalones->getMarca();
        $this->view->mostrarFormularioEditar($dato,$datomarca);
    }

    function showFormEditMarca($params){
        $this->checkLoggedIn();
        $id_editarMarca= $params[':ID'];
        $datoMarca = $this->ModelPantalones->getByEditMarca($id_editarMarca);
        $this->view->mostrarForumarioEditarMarca($datoMarca);
    }
    //############## FUNCIONES ESPECIALES ##########
    //Filtra las marcas en nuestros pantalones
    function filtrar($params){
        $id =$params[':ID'];
        $dato=$this->ModelPantalones->getPantalonByMarca($id);
        $this->view->filtroParaMarcas($dato);     
    }
    
    function verMas($params){
        $id =$params[':ID'];
        $dato=$this->ModelPantalones->getPantalonYdescripcion($id);
        $this->view->filtroCompleto($dato);  
    }

}
