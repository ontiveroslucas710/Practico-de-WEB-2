<?php
require_once './model/ModelMarca.php';
require_once './model/ModelPantalones.php';
require_once './api/apiView.php';
class apiPantalonController{

    private $model;
    private $ModelPantalones;
    private $view;
    private $apiView;

    function __construct(){
        $this->modelMarca= new ModelMarca();
        $this->ModelPantalones= new ModelPantalones();
        $this->apiView = new apiView();
    }

    public function getPantalones(){
        $dato=$this->ModelPantalones->getPantalones();
        $this->apiView->response($dato, 200);
    }  
    public function getPantalonesID($params=NULL){
        $id=$params[':ID'];
        $dato=$this->ModelPantalones->getById($id);
        $this->apiView->response($dato, 200);
    }  

}