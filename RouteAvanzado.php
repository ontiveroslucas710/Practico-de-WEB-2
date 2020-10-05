<?php
    require_once 'controller/Controller.php';
    require_once 'controller/UserController.php';
    require_once 'RouterClass.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');
    $r = new Router();
    
    
    $r->addRoute("verificaForm", "POST", "UserController", "verificaForm");   
    $r->addRoute("registrar", "GET", "UserController", "mostrarRegistro");
    $r->addRoute("logout", "GET", "UserController", "logout");


    $r->addRoute("home", "GET", "Controller", "home");
    $r->addRoute("ropa", "GET", "Controller", "MostrarPantalones");
    $r->addRoute("tabla_de_pantalones", "GET", "Controller", "mostrarTabla");

    //ACCION PARA FILTRAR MARCA
    $r->addRoute("filtro/:ID", "GET", "Controller", "filtrar");
    $r->addRoute("verMas/:ID", "GET", "Controller", "verMas");

    //acciones de la tabla, agregar, borrar, editarX 2 
    $r->addRoute("agregar", "POST", "Controller", "insertPantalon");
    $r->addRoute("borrar/:ID", "GET", "Controller", "borrarPantalon");
    $r->addRoute("edit/:ID", "GET", "Controller", "showFormEdit"); 
    $r->addRoute("edit", "POST", "Controller", "Edit"); 
   
    //Ruta por defecto.
    $r->setDefaultRoute("Controller", "home");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 

    //Advance
    $r->addRoute("autocompletar", "GET", "TasksAdvanceController", "AutoCompletar");
?>