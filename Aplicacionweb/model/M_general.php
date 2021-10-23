<?php
 //Conexion a la BD
 
 class General {

    private $db;
    private $general;

    public function __construct(){
        $this->db = conectar::conexion();
    }
 }


