<?php
require_once './model/ModelModifierPantalon.php';
require_once './model/ModelModifierMarca.php';
require_once './view/View.php';

class modifierPantalonController{
    private $model;
    private $view;

    function __construct(){
        $this->view= new View();
        $this->modelModifierPantalon = new ModelModifierPantalon();
        $this->modelModifierMarca = new ModelModifierMarca;
        
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

    //Agrega pantalones en la lista completa
    function insertPantalon(){
        $this->checkLoggedInAdmin();
         $nombre=$_POST['nombre'];
         $talle=$_POST['talle'];
         $color=$_POST['color'];
         $tela=$_POST['tela'];
         $precio=$_POST['precio'];
         $marcas=$_POST['marca'];        
         $this->modelModifierPantalon->addPpantalon($nombre,$talle,$color,$tela,$precio,$marcas);
         $this->view->volverlocation();        
     }    

    //Borra pantalon de la lista completa
    function borrarPantalon($params = null){
        $this->checkLoggedInAdmin();
        $id_borrar= $params[':ID'];
        $this->modelModifierPantalon->deletPantalon($id_borrar);        
        $this->view->volverlocation();   
    }  

    function Edit(){
        $this->checkLoggedInAdmin();
        $dato =$_POST['id'];
        $nombre_editar=$_POST['nombre_edit'];
        $talle_editar=$_POST['talle_edit'];
        $color_editar=$_POST['color_edit'];
        $tela_editar=$_POST['tela_edit'];
        $precio_editar=$_POST['precio_edit'];
        $marca=$_POST['marca_edit'];        
        $this->modelModifierPantalon->editarPantalon($nombre_editar,$talle_editar,$color_editar, $tela_editar, $precio_editar, $marca, $dato);         
        $this->view->volverlocation();
    }  
    
    function agregarMarca(){
        $this->checkLoggedInAdmin();
        $marca=$_POST['marca'];
        $descripcion=$_POST['descripcion'];
        $this->modelModifierMarca->addMarca($marca, $descripcion);
        $this->view->volverlocation();
    }
    
    function borrarMarca($params = null){
        $this->checkLoggedInAdmin();
        $id_borrarMarca= $params[':ID'];
        $this->modelModifierMarca->deletMarca($id_borrarMarca);        
        $this->view->volverlocation(); 
    }
    
    function editMarca(){
        $this->checkLoggedInAdmin();
        $dato =$_POST['id_edit'];
        $marca_editar=$_POST['marca_edit'];
        $descrip_editar=$_POST['descripcion_edit'];
        $this->modelModifierMarca->editarMarca($marca_editar, $descrip_editar, $dato); 
        $this->view->volverlocation();  
    }
}