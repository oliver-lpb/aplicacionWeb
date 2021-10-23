<?php

//Definimos el acceso a la Base de Datos (mysqli)

class conectar {

    public static function conexion(){
       $conexion = new mysqli("localhost","root","","proyecto");

    // Otra forma para manejar errores de conexion:
      
if (!$conexion) {              
    die("Conexion fallida: " . mysqli_connect_error());
}

        return $conexion;
       mysqli_close($conexion);
    }

}

?>