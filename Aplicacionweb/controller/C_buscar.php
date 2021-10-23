<?php

class ControlBuscar {

    public function control_b(){

        require_once "model/M_buscar.php";
        $listado = new Buscar();

        if ($_SERVER['REQUEST_METHOD']==="POST") { 

            if ($_POST{'tipo'} === 'busqueda') {

                $car_b = $_POST['car_buscar'];

            //Buscar
            $buscar["alumno"] = $listado->buscar_ninio($car_b);

                require_once "view/ventanas/resul_busqueda.php";
            }  
            
        }
        else {
            $data["alumnos"]= $listado->lista_general();
            require_once "view/ventanas/busqueda.php";
        }
        
    }
}

?>