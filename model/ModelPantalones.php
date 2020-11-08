<?php
require_once './controller/PantalonController.php';

class ModelPantalones {
    private $db;

    function __construct(){
        $this->db= new PDO('mysql:host=localhost;'.'dbname=db_ropa;charset=utf8', 'root', '');        
    }
    
    function getPantalones() {
        $query = $this->db->prepare('SELECT * FROM pantalon JOIN marca ON (pantalon.id_marca=marca.id_marca)');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }   

    
    function getById($id){
        $query = $this->db->prepare('SELECT * FROM pantalon JOIN marca ON (pantalon.id_marca=marca.id_marca) AND pantalon.id_pantalones = ?');
        $query->execute(array($id));
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $result;
    } 

    function getPantalonYdescripcion($dato){
        $query = $this->db->prepare('SELECT * FROM pantalon JOIN marca ON (pantalon.id_marca=marca.id_marca) AND pantalon.id_pantalones = ?');
        $query->execute(array($dato));
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
}