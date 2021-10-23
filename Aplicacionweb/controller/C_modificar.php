<?php

class ControlModificar {
    
    public function control_mod(){

         require_once "model/M_Modificar.php";
         $modificar = new Modificar();

    if ($_SERVER['REQUEST_METHOD']==="POST") { 

        //Buscar alumno
        if ($_POST{'tipo'} === 'mod_alumno') {
            $car_m = $_POST['car_mod'];
            //Buscar
            $mod_ninio["alumno"] = $modificar->buscar_ninio($car_m);

            require_once "view/ventanas/mod_alumno.php";
        }  

        //buscar encargado
        if ($_POST{'tipo'} === 'mod_encargado') {
            $id_m = $_POST['id_mod'];
            //Buscar
            $mod_encargado["encargado"] = $modificar->buscar_encargado($id_m);

            require_once "view/ventanas/mod_encargado.php";
        }  
          
        //Resultado busqueda de encargado
        else if ($_POST{'tipo'} === 'modificar_encargado') {
                         
            $id_e = $_POST['id_enc_m'];
            $nombre_e = $_POST['nombre_enc_m'];
            $ape_e = $_POST['ape_enc_m'];
            $dpi = $_POST['dpi_m'];
            $correo = $_POST['correo_m'];
            $direccion = $_POST['direccion_m'];
            $tel = $_POST['tel_m'];
            $cel = $_POST['cel_m'];
            $sexo_e = $_POST['sexo_enc_m'];

            $modificar->modificar_encargado($id_e, $nombre_e, $ape_e, $dpi, $correo, $direccion, $tel, $cel, $sexo_e);
           
            require_once "view/ventanas/principal.php";
   
            }  
        //Resultado busqueda de alumno    
        else if ($_POST['tipo'] === 'modificar_alumno') {

            $nombre_a = $_POST['nom_alum_m'];
            $ape_a = $_POST['ape_alum_m'];
            $fecha_a = $_POST['fec_alum_m'];
            $edad_a = $_POST['edad_alum_m'];
            $grado_a = $_POST['grado_alum_m'];
            $id_enc = $_POST['id_en_m'];
            $carnet = $_POST['car_alum_m'];
            $sexo_a = $_POST['sexo_alum_m'];
    
            $modificar->modificar_ninio($nombre_a, $ape_a, $fecha_a, $edad_a, $id_enc, $grado_a, $carnet, $sexo_a);
            require_once "view/ventanas/registroExitoso.php";
            }
        }
        
        else {
            require_once "view/ventanas/mod_datos.php";
            }
        } 
       
    }


?>