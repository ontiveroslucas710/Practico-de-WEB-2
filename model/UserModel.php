<?php
require_once './controller/UserController.php';

class UserModel {
    private $db;

    function __construct(){
        $this->db= new PDO('mysql:host=localhost;'.'dbname=db_ropa;charset=utf8', 'root', '');        
    }
    //##########  FUNCIONES PARA OBTENER ELEMENTOS  ##########
    function getusuario($dato){
        $query= $this->db->prepare('SELECT * FROM usuario WHERE nombre=?');
        $query->execute(array($dato));
        return $query;
    }
    function cargaUsuario($nombre,$usuario,$contra){
        $query= $this->db->prepare('INSERT INTO usuario (nombre,correo,contraseña) VALUE (?,?,?)');
        $query->execute(array($nombre,$usuario,$contra));
    }
    
}
