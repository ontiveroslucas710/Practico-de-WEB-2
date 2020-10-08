<?php

require_once './controller/Controller.php';
require_once './libs/smarty/Smarty.class.php';

class View {

    function __construct(){
        $this->smarty = new Smarty();
        
        if(session_status() !== PHP_SESSION_ACTIVE){
            session_start();
        }               
        if(isset($_SESSION['USERNAME'])){
            $this->smarty->assign('nombre', $_SESSION['USERNAME']);
        }
    }
    
    //####### FUNCIONES PRINCIPALES DEL VIEW ########
    function nuestraHome(){      
        $this->smarty->display('templates/home.tpl');
    }

     //funcion para mostrar pantalones por categorias
    function ListaPantalonesPorMarca($dato){        
        $this->smarty->assign('marcas', $dato);        
        $this->smarty->display('templates/pantalones_muestra.tpl');
    }

    function listaDePantalones($dato, $datoMarca){
        $this->smarty->assign('titulo','lista de pantalones'); 
        $this->smarty->assign('titulo2','lista de marcas');
        $this->smarty->assign('marcas', $datoMarca);       
        $this->smarty->assign('panta', $dato); 
        $this->smarty->display('templates/listaPantalones.tpl');     
    }

    //###### Funciones especiales ####

    function filtroParaMarcas($dato){ 
        $this->smarty->assign('marca', $dato);
        $this->smarty->display('templates/filtroMarca.tpl');
    }

    function filtroCompleto($dato){
        $this->smarty->assign('marca', $dato);
        $this->smarty->display('templates/filtroCompleto.tpl');
    }

    function mostrarFormularioEditar($dato){
        $this->smarty->assign('pantalon', $dato);
        $this->smarty->display('templates/formularioEditar.tpl');
    }

    function mostrarForumarioEditarMarca($datoMarca){
        $this->smarty->assign('marca', $datoMarca);
        $this->smarty->display('templates/formularioEditarMarca.tpl');
    }
    
    
    function volverlocation(){        
        header("Location: ".BASE_URL."tabla_de_pantalones");        
    }

    function irARegistrar(){
        header("Location: ".BASE_URL."login");
    }
   
 
    
}

