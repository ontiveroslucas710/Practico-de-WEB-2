<?php
require_once './model/UserModel.php';
require_once './view/UserView.php';

class UserController{
    private $Usermodel;
    private $Userview;

    function __construct(){
        $this->Userview= new UserView();
        $this->Usermodel= new UserModel();
    }
   

     function mostrarRegistro(){
        $this->Userview->nuestroRegistro();
    }

    function verificaForm(){
        $nombre= $_POST['usuario'];        
        $contraseña= $_POST['contraseña'];  
        
        if(isset($nombre)){
            $BDusuario= $this->Usermodel->getusuario($nombre);
            if(isset($BDusuario) && $BDusuario){                
                if(password_verify($contraseña, $BDusuario->password)){
                    session_start();
                    $_SESSION['USERNAME']= $BDusuario->nombre;
                    $this->Userview->volverALaHome("estas conectado");                    
                }else{
                    $this->Userview->nuestroRegistro("Contraseña Incorrecta");                   
                }
            }else{
                $this->Userview->nuestroRegistro("el usuario no existe");             
            }
        }     
    
    }

    function logout(){
        session_start();
        session_destroy();
        $this->Userview->volverARegistro();
    }
    
}
