<?php
require_once './model/modelComentarios.php';
require_once './api/apiView.php';
class apiPantalonController{

    private $modelComentario;
    private $apiView;

    function __construct(){
        $this->apiView = new apiView();
        $this->modelComentario= new modelComentarios();
    }

    public function getComentarios($params = null){
        $dato=$this->modelComentario->getComentarios();
        $this->apiView->response($dato, 200);
    }  
    
    public function getComentariosById($params = null){
        $id_comentario = $params[':ID'];
        $dato = $this->modelComentario->getComentarioPorId($id_comentario);

        if (!empty($dato)) {
            $this->apiView->response($dato, 200);
        }
        else{
            $this->apiView->response("el comentario con el id=$id_comentario no existe", 404);
        }
    }

    public function deleteComentariosById($params = null){
        $id_comentario = $params[':ID'];
        $result =  $this->modelComentario->deleteComentarioId($id_comentario);
        if ($result > 0) {
            $this->apiView->response("el comentario con el id=$id_comentario fue eliminada", 200);
        }
        else{
            $this->apiView->response("el comentario con el id=$id_comentario no existe", 404);
        }
    }

}


