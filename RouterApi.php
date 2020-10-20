<?php
require_once 'RouterClass.php';

$router = new Router();

 //run
 $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 