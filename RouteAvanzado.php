<?php
    require_once 'controller/Controller.php';
    require_once 'controller/UserController.php';
    require_once 'RouterClass.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    

    $r = new Router();

    // RUTAS GENERALES : home, tabla de pantalones, ropa, registrar
    $r->addRoute("verificaForm", "POST", "UserController", "verificaForm");
    $r->addRoute("login", "GET", "UserController", "logearse");

    $r->addRoute("addlogin", "POST", "UserController", "cargarlogin");
    $r->addRoute("input", "GET", "UserController", "mostrar");

    $r->addRoute("home", "GET", "Controller", "home");
    $r->addRoute("ropa", "GET", "Controller", "MostrarPantalones");
    $r->addRoute("tabla_de_pantalones", "GET", "Controller", "mostrarTabla");
    $r->addRoute("registrar", "GET", "Controller", "mostrarRegistro");

    //ACCION PARA FILTRAR MARCA
    $r->addRoute("filtro/:ID", "GET", "Controller", "filtrar");

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