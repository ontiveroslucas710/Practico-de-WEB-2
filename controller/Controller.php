<?php
require_once './model/Model.php';
require_once './view/View.php';

class Controller{
    private $model;
    private $view;

    function __construct(){
        $this->view= new View();
        $this->model= new Model();
    }

    private function checkLoggedIn(){
        session_start();
        if(!$_SESSION["USERNAME"]){
            $this->view->nuestroRegistro();
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
        $dato=$this->model->getMarca();
        $this->view->ListaPantalonesPorMarca($dato);
    }
    

    //funcion para mostrar Lista de Pantalones y la tabla completa
    function mostrarTabla(){      
        $dato=$this->model->getPantalones();
        $this->view->listaDePantalones($dato);            
    }    


    //funcion para mostrar registro
    function mostrarRegistro(){
        $this->view->nuestroRegistro();
    }


    //############## FUNCIONES ESPECIALES ##########
    //Filtra las marcas en nuestros pantalones
    function filtrar($params){
        $id =$params[':ID'];
        $dato=$this->model->getPantalonByMarca($id);
        $this->view->filtroParaMarcas($dato);     
    }
    function verMas($params){
        $id =$params[':ID'];
        $dato=$this->model->getPantalonYdescripcion($id);
        $this->view->filtroCompleto($dato);  
    }


    //Agrega pantalones en la lista completa
    function insertPantalon(){
       $this->checkLoggedIn();
        
        $nombre=$_POST['nombre'];
        $talle=$_POST['talle'];
        $color=$_POST['color'];
        $tela=$_POST['tela'];
        $precio=$_POST['precio'];
        $marca=$_POST['marca'];                  
        $this->model->addPpantalon($nombre,$talle,$color,$tela,$precio,$marca);
        $this->view->volverlocation();        
    }

    //Borra pantalon de la lista completa
    function borrarPantalon($params = null){
        $this->checkLoggedIn();
        $id_borrar= $params[':ID'];
        $this->model->deletPantalon($id_borrar);        
        $this->view->volverlocation();        
    }

    //Tanto showFromEdit como Edit sirven para poder editar el elemento seleccionado
    function showFormEdit($params){
        $this->checkLoggedIn();
        $id_editar= $params[':ID'];
        $dato = $this->model->getById($id_editar);
        $this->view->mostrarFormularioEditar($dato);
    }

    function Edit(){
        $this->checkLoggedIn();
        $dato =$_POST['id'];
        $nombre_editar=$_POST['nombre_edit'];
        $talle_editar=$_POST['talle_edit'];
        $color_editar=$_POST['color_edit'];
        $tela_editar=$_POST['tela_edit'];
        $precio_editar=$_POST['precio_edit'];
        $marca_editar=$_POST['marca_edit'];
        $this->model->editarPantalon($nombre_editar,$talle_editar,$color_editar, $tela_editar, $precio_editar, $marca_editar, $dato);        
        $this->view->volverlocation();
    }  

    
}
