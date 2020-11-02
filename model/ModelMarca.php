<?php
require_once './controller/PantalonController.php';

class ModelMarca {
    private $db;
    function __construct(){
        $this->db= new PDO('mysql:host=localhost;'.'dbname=db_ropa;charset=utf8', 'root', '');        
    }
//obtengo solo las marcas
function getMarca(){
    $query = $this->db->prepare('SELECT * FROM marca');
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_OBJ);
    return $result;
    }

    function getByEditMarca($id){
        $query = $this->db->prepare("SELECT * FROM marca WHERE id_marca = ?");
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


}