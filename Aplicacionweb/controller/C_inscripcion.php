<?php

class ControlInscripcion {
    
    public function control_insc(){

         require_once "model/M_inscripcion.php";
         $ninio = new Inscribir();

      if ($_SERVER['REQUEST_METHOD']==="POST") { 

       if ($_POST{'tipo'} === 'registrar_encargado') {
                         
            $id_e = $_POST['id_enc'];
            $nombre_e = $_POST['nombre_enc'];
            $ape_e = $_POST['ape_enc'];
            $dpi = $_POST['dpi'];
            $correo = $_POST['correo'];
            $direccion = $_POST['direccion'];
            $tel = $_POST['tel'];
            $cel = $_POST['cel'];
            $sexo_e = $_POST['sexo_enc'];

            $ninio->registrar_encargado($id_e, $nombre_e, $ape_e, $dpi, $correo, $direccion, $tel, $cel, $sexo_e);
           
            require_once "view/ventanas/insc_alumno.php";
   
            }  
            
        else if ($_POST['tipo'] === 'registrar_alumno') {

            $nombre_a = $_POST['nom_alum'];
            $ape_a = $_POST['ape_alum'];
            $fecha_a = $_POST['fec_alum'];
            $edad_a = $_POST['edad_alum'];
            $grado_a = $_POST['grado_alum'];
            $id_enc = $_POST['id_en'];
            $carnet = $_POST['car_alum'];
            $sexo_a = $_POST['sexo_alum'];
    
            $ninio->registrar_ninio($nombre_a, $ape_a, $fecha_a, $edad_a, $id_enc, $grado_a, $carnet, $sexo_a);
            require_once "view/ventanas/registroExitoso.php";
            }
        }
        
           
        else {
            require_once "view/ventanas/insc_encargado.php";
            }

        } 
       
    }


    
   

?>