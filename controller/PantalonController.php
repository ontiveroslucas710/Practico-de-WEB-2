<?php
require_once './model/Model.php';
require_once './view/View.php';

class PantalonController{
    private $model;
    private $view;

    function __construct(){
        $this->view= new View();
        $this->model= new Model();
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
        $dato=$this->model->getMarca();
        $this->view->ListaPantalonesPorMarca($dato);
    }
    
    //funcion para mostrar Lista de Pantalones y la tabla completa
    function mostrarTabla(){      
        $dato=$this->model->getPantalones();
        $datoMarca = $this->model->getMarca();
        $this->view->listaDePantalones($dato, $datoMarca);            
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
        $marcas=$_POST['marca'];

        /*for ($i=0;$i<count($marcas);$i++)  {
            $marcaSeleccionada = $marcas[$i];
        }*/
        
        $this->model->addPpantalon($nombre,$talle,$color,$tela,$precio,$marcas);
        $this->view->volverlocation();        
    }

    function agregarMarca(){
        $this->checkLoggedIn();
        $marca=$_POST['marca'];
        $descripcion=$_POST['descripcion'];
        $this->model->addMarca($marca, $descripcion);
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
        $datomarca = $this->model->getMarca();
        $this->view->mostrarFormularioEditar($dato,$datomarca);
    }

    function Edit(){
        $this->checkLoggedIn();
        $dato =$_POST['id'];
        $nombre_editar=$_POST['nombre_edit'];
        $talle_editar=$_POST['talle_edit'];
        $color_editar=$_POST['color_edit'];
        $tela_editar=$_POST['tela_edit'];
        $precio_editar=$_POST['precio_edit'];
        $marca=$_POST['marca_edit'];
        
        /*for ($i=0;$i<count($marca);$i++)  {
            $marcaSeleccionada = $marca[$i];
         }*/
        
        $this->model->editarPantalon($nombre_editar,$talle_editar,$color_editar, $tela_editar, $precio_editar, $marca, $dato);        
        
        $this->view->volverlocation();
    }  

    function showFormEditMarca($params){
        $this->checkLoggedIn();
        $id_editarMarca= $params[':ID'];
        $datoMarca = $this->model->getByEditMarca($id_editarMarca);
        $this->view->mostrarForumarioEditarMarca($datoMarca);
    }

    function borrarMarca($params = null){
        $this->checkLoggedIn();
        $id_borrarMarca= $params[':ID'];
        $this->model->deletMarca($id_borrarMarca);        
        $this->view->volverlocation(); 
    }
    function editMarca(){
        $this->checkLoggedIn();
        $dato =$_POST['id_edit'];
        $marca_editar=$_POST['marca_edit'];
        $descrip_editar=$_POST['descripcion_edit'];
        $this->model->editarMarca($marca_editar, $descrip_editar, $dato); 
        $this->view->volverlocation();  
    }
}
