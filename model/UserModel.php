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
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $query;
    }


    function cargaUsuario($nombre,$hash){
        $query= $this->db->prepare('INSERT INTO usuario (nombre,password) VALUE (?,?)');
        $query->execute(array($nombre,$hash));
    }
    
}
