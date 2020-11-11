<?php
require_once './model/ModelModifierPantalon.php';
require_once './model/ModelModifierMarca.php';
require_once './model/ModelPantalones.php';
require_once './view/View.php';

class modifierPantalonController{
    private $modelMarca;
    private $view;

    function __construct(){
        $this->view= new View();
        $this->modelMarca = new ModelMarca();
        $this->modelModifierPantalon = new ModelModifierPantalon();
        $this->modelModifierMarca = new ModelModifierMarca;
        $this->modelPantalon = new ModelPantalones;
        
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
        if(isset($_FILES['img'])){
            $capturas= getcwd()."/capturas/";
            $destino= tempnam($capturas,$_FILES['img']['tmp_name']);
            move_uploaded_file($_FILES['img']['tmp_name'], $destino);
            $destino= basename($destino);
        }        
         $nombre=$_POST['nombre'];
         $talle=$_POST['talle'];
         $color=$_POST['color'];
         $tela=$_POST['tela'];
         $precio=$_POST['precio'];
         $marcas=$_POST['marca'];        
         $this->modelModifierPantalon->addPpantalon($nombre,$talle,$color,$tela,$precio,$destino,$marcas);
         $this->view->volverlocation();        
     }    

    function borrarPantalon($params = null){
        $this->checkLoggedInAdmin();
        $id_borrar= $params[':ID'];
        $this->modelModifierPantalon->deletPantalon($id_borrar);        
        $this->view->volverlocation();   
    }  

    function editPantalon(){
        $this->checkLoggedInAdmin();
        $dato =$_POST['id'];
        $nombre_editar=$_POST['nombre_edit'];
        $talle_editar=$_POST['talle_edit'];
        $color_editar=$_POST['color_edit'];
        $tela_editar=$_POST['tela_edit'];
        $precio_editar=$_POST['precio_edit'];
        $marca=$_POST['marca_edit'];        
        $imagen=$_POST['img_edit']; // aca si o si toma el valor del input, si esta vacio se guarda vacio y muestra vacio
        $this->modelModifierPantalon->editarPantalon($nombre_editar,$talle_editar,$color_editar, $tela_editar, $precio_editar,$imagen, $marca, $dato);         
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
        $dato = $this->modelMarca->getPantalonByMarca($id_borrarMarca);
        if(count($dato) == 0){
            $this->modelModifierMarca->deletMarca($id_borrarMarca); 
            $this->view->volverlocation(); 
        }else if(count($dato) > 0){
            $marca = $this->modelMarca->getByEditMarca($id_borrarMarca);
            $this->view->confirmarEliminacion($id_borrarMarca, $marca);
        }
    }
    
    function confirmarElBorrado($params = null){
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