<?php

//Control Pagina principal

class ControlPrincipal {
    
    public function control(){

        require_once "model/M_principal.php";
        $ninio = new Ninios();


        //Listados segun grado
        $grado["primero"]= $ninio->ninios_primero();

        $grado["segundo"]= $ninio->ninios_segundo();

        $grado["tercero"]= $ninio->ninios_tercero();

        $grado["cuarto"]= $ninio->ninios_cuarto();

        $grado["quinto"]= $ninio->ninios_quinto();

        $grado["sexto"]= $ninio->ninios_sexto();    
     
        require_once "view/ventanas/inicio.php";
    
        }
        
    }


    
?>