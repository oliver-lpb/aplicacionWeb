<?php
 //clase inscribir para guardar alumnos
 class Inscribir {

    private $db;

    public function __construct(){
        $this->db = conectar::conexion();
    
    }

     //Inscripcion de niño
     public function registrar_encargado($id_e, $nombre_e, $ape_e, $dpi, $correo, $direccion, $tel, $cel, $sexo_e) {
        $sql = "call registrar_encargado ('$id_e', '$dpi','$nombre_e', '$ape_e', '$sexo_e', '$correo', '$direccion', '$tel', '$cel') ";
        $this->db->query($sql); 
     }

     public function registrar_ninio($nombre_a, $ape_a, $fecha_a, $edad_a, $id_enc, $grado_a, $carnet, $sexo_a){
        $sql = "call registrar_alumno ('$carnet', '$nombre_a', '$ape_a', '$fecha_a', '$edad_a', '$sexo_a', '$grado_a', '$id_enc') ";
        $this->db->query($sql); 
        } 
}


?>