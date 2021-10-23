<?php
 //Conexion a la BD
 
 class Buscar {

    private $db;
    private $ninios;

    public function __construct(){
        $this->db = conectar::conexion();
        $this->ninios = array();
    }


    //Listado general de alumnos
    public function lista_general(){
    $sql = "select * from alumno";
    $resultado = $this->db->query($sql);
    while ($r =$resultado->fetch_assoc())
    {
    $this->ninios[] = $r;
    }
    return $this->ninios;
    } 

    //Busqueda de Alumno
    public function buscar_ninio($car_b){
        $buscar = array();
        $sql = "select * from alumno where carnet = '$car_b'";
        $this->db->query($sql); 
        $resultado = $this->db->query($sql);
        while ($r =$resultado->fetch_assoc())
        {
            $buscar[] = $r;
        }
        return $buscar;
        } 

 }
