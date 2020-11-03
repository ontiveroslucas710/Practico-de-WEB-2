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
        $this->apiView->response($dato);
    }  


}