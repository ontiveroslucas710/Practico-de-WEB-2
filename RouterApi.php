<?php
require_once 'RouterClass.php';
require_once './api/apiPantalonController.php';


$router = new Router();

$router->addRoute("ropa", "GET", "apiPantalonController", "getPantalones");



 $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 