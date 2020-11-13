<?php
require_once './model/ModelMarca.php';
require_once './model/ModelPantalones.php';
require_once './view/View.php';

class PantalonController{
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

    function home(){
        $this->view->nuestraHome();
    }    
 
    function MostrarPantalones(){
        $dato=$this->modelMarca->getMarca();
        $this->view->ListaPantalonesPorMarca($dato);
    }    

    function mostrarTabla(){      
        $dato=$this->ModelPantalones->getPantalones();
        $datoMarca = $this->modelMarca->getMarca();
        $this->view->listaDePantalones($dato, $datoMarca);            
    }    
 
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

    function filtrar($params){
        $id =$params[':ID'];
        $dato=$this->modelMarca->getPantalonByMarca($id);
        $this->view->filtroParaMarcas($dato);     
    }
    
    function verMas($params){
        $id =$params[':ID'];
        $dato=$this->ModelPantalones->getById($id);
        $this->view->filtroCompleto($dato);  
    }

    function mostrarComentario($params = null){
        $id_comentario = $params[':ID'];
        $dato = $this->ModelPantalones->getById($id_comentario);
        $this->view->showComentarios($dato);
    }


}
