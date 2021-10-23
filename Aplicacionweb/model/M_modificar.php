<?php
 //clase Modificar para actualizaciones
 class Modificar {

    private $db;
    private $ninios;
   
    public function __construct(){
        $this->db = conectar::conexion();
        $this->ninios = array();
   
    }

     //Actualizar encargado
     public function modificar_encargado($id_e, $nombre_e, $ape_e, $dpi, $correo, $direccion, $tel, $cel, $sexo_e) {
        $sql = "call mod_encargado ('$id_e', '$dpi','$nombre_e', '$ape_e', '$sexo_e', '$correo', '$direccion', '$tel', '$cel') ";
        $this->db->query($sql); 
     }

     //Actualizar alumno
     public function modificar_ninio($nombre_a, $ape_a, $fecha_a, $edad_a, $id_enc, $grado_a, $carnet, $sexo_a){
        $sql = "call mod_alumno ('$carnet', '$nombre_a', '$ape_a', '$fecha_a', '$edad_a', '$sexo_a', '$grado_a', '$id_enc') ";
        $this->db->query($sql); 
        } 

    //Busqueda de Alumno
    public function buscar_ninio($car_m){
      $buscar = array();
      $sql = "select * from alumno where carnet = '$car_m'";
      $this->db->query($sql); 
      $resultado = $this->db->query($sql);
      while ($r =$resultado->fetch_assoc())
      {
          $buscar[] = $r;
      }
      return $buscar;
      } 

      
    //Busqueda de Encargado
    public function buscar_encargado($id_m){
      $buscar = array();
      $sql = "select * from encargado where id_encargado = '$id_m'";
      $this->db->query($sql); 
      $resultado = $this->db->query($sql);
      while ($r =$resultado->fetch_assoc())
      {
          $buscar[] = $r;
      }
      return $buscar;
      } 


}


?>