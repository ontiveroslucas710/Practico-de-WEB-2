<?php
require_once './controller/Controller.php';

class Model {
    private $db;

    function __construct(){
        $this->db= new PDO('mysql:host=localhost;'.'dbname=db_ropa;charset=utf8', 'root', '');        
    }
    //##########  FUNCIONES PARA OBTENER ELEMENTOS  ##########
    //obtengo todos los pantalones + la marca
    function getPantalones() {
        $query = $this->db->prepare('SELECT * FROM pantalon JOIN marca ON (pantalon.id_marca=marca.id_marca)');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    //obtengo solo las marcas
    function getMarca(){
        $query = $this->db->prepare('SELECT * FROM marca');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    //Obtengo el ID de los pantalones
    function getById($id){
        $query = $this->db->prepare("SELECT * FROM pantalon WHERE id_pantalones = ?");
        $query->execute(array($id));
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    
    //Obtiene la lista de pantalon de la DB según marca
    function getPantalonByMarca($id) {
        // conecta las dos tablas y busca el nombre de la marca segun ID
        $query = $this->db->prepare('SELECT * FROM pantalon JOIN marca ON (pantalon.id_marca=marca.id_marca) AND marca.id_marca = ?');
        $query->execute(array($id));
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $result;
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
}
