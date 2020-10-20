<?php
    require_once 'controller/PantalonController.php';
    require_once 'controller/modifierPantalonController.php';
    require_once 'controller/UserController.php';
    require_once 'RouterClass.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');
    $r = new Router();
        
    $r->addRoute("verificaForm", "POST", "UserController", "verificaForm");   
    $r->addRoute("login", "GET", "UserController", "mostrarRegistro");
    $r->addRoute("logout", "GET", "UserController", "logout");


    $r->addRoute("home", "GET", "PantalonController", "home");
    $r->addRoute("ropa", "GET", "PantalonController", "MostrarPantalones");
    $r->addRoute("tabla_de_pantalones", "GET", "PantalonController", "mostrarTabla");

    //ACCION PARA FILTRAR MARCA
    $r->addRoute("filtro/:ID", "GET", "PantalonController", "filtrar");
    $r->addRoute("verMas/:ID", "GET", "PantalonController", "verMas");
    
    //acciones de la tabla, agregar, borrar, editarX 2 
    $r->addRoute("editMarca/:ID", "GET", "PantalonController", "showFormEditMarca"); 
    $r->addRoute("agregar", "POST", "modifierPantalonController", "insertPantalon");
    $r->addRoute("agregarMarca", "POST", "modifierPantalonController", "agregarMarca");
    $r->addRoute("borrar/:ID", "GET", "modifierPantalonController", "borrarPantalon");
    $r->addRoute("edit/:ID", "GET", "PantalonController", "showFormEdit");
    $r->addRoute("edit", "POST", "modifierPantalonController", "Edit"); 
    $r->addRoute("borrarMarca/:ID", "GET", "modifierPantalonController", "borrarMarca");
    $r->addRoute("editMarca", "POST", "modifierPantalonController", "editMarca"); 
   
    //Ruta por defecto.
    $r->setDefaultRoute("PantalonController", "home");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 

    //Advance
    $r->addRoute("autocompletar", "GET", "TasksAdvanceController", "AutoCompletar");
?>