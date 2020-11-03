<?php
require_once './controller/modifierPantalonController.php';

class ModelModifierPantalon {
    private $db;

    function __construct(){
        $this->db= new PDO('mysql:host=localhost;'.'dbname=db_ropa;charset=utf8', 'root', '');        
    }
    
    //###########  FUNCIONES PARA MODIFICAR LA TABLA PRINCIPAL ################
    //AGREGAR PANTALON
    function addPpantalon($nombre,$talle,$color,$tela,$precio,$marca){
        $query=$this->db->prepare('INSERT INTO pantalon (nombre,talle,color,tela,precio,id_marca)
        VALUE (?,?,?,?,?,?)');
        $query->execute(array($nombre,$talle,$color,$tela,$precio,$marca));        
    }  

    //ELIMINAR PANTALON
    function deletPantalon($dato){
        $query=$this->db->prepare('DELETE FROM pantalon WHERE id_pantalones=?');
        $query->execute(array($dato));
    }
    //EDITAR PANTALON
    function editarPantalon($nombre,$talle,$color,$tela,$precio,$marca, $dato){      
        $query=$this->db->prepare('UPDATE pantalon SET nombre=?,talle=?,color=?,tela=?,precio=?,id_marca=? WHERE id_pantalones=?');
        $query->execute(array($nombre,$talle,$color,$tela,$precio,$marca,$dato));
    }

    function addMarca($marca, $descripcion){
        $query=$this->db->prepare('INSERT INTO marca (descripcion, marca)
        VALUE (?,?)');
        $query->execute(array($descripcion, $marca));  
    }

    function editarMarca($edit_marca, $descripcion_editar, $dato){
        $query=$this->db->prepare('UPDATE marca SET descripcion=?, marca=? WHERE id_marca=?');
        $query->execute(array($descripcion_editar, $edit_marca, $dato));
    }
    function deletMarca($dato){
        $query=$this->db->prepare('DELETE FROM marca WHERE id_marca=?');
        $query->execute(array($dato));
    }
}
