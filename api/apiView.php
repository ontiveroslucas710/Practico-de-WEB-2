<?php
require_once './api/apiPantalonController.php';

class apiView{

    public function response($dato) {
        echo json_encode($dato);
    }

}