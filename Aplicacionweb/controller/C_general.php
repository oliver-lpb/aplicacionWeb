<?php

//Controlpagina de login 

class ControlGeneral {
    
    public function control(){

        require_once "model/M_general.php";
        $general = new General();
        
        require_once "view/ventanas/login.php";
    
        }
        
    }

?>