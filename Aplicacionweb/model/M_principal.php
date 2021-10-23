<?php
 //Clase para listar niños por grado
 class Ninios {

    private $db;
    private $ninios;

    public function __construct(){
        $this->db = conectar::conexion();
        $this->ninios = array();
        $this->ninios1 = array();
        $this->ninios2 = array();
        $this->ninios3 = array();
        $this->ninios4 = array();
        $this->ninios5 = array();
        $this->ninios6 = array();
    }


    // Listar niños segun grado 
    
    public function ninios_primero(){
          $sql = "select * from vista_primero";
        $resultado = $this->db->query($sql);
        while ($r =$resultado->fetch_assoc())
        {
            $this->ninios1[] = $r;
        }
        return $this->ninios1;
    } 

    public function ninios_segundo(){
        $sql = "select * from vista_segundo";
      $resultado = $this->db->query($sql);
      while ($r =$resultado->fetch_assoc())
      {
          $this->ninios2[] = $r;
      }
      return $this->ninios2;
    }

    public function ninios_tercero(){
        $sql = "select * from vista_tercero";
    $resultado = $this->db->query($sql);
    while ($r =$resultado->fetch_assoc())
    {
        $this->ninios3[] = $r;
    }
    return $this->ninios3;
    } 

    public function ninios_cuarto(){
        $sql = "select * from vista_cuarto";
      $resultado = $this->db->query($sql);
      while ($r =$resultado->fetch_assoc())
      {
          $this->ninios4[] = $r;
      }
      return $this->ninios4;
  } 

  public function ninios_quinto(){
      $sql = "select * from vista_quinto";
    $resultado = $this->db->query($sql);
    while ($r =$resultado->fetch_assoc())
    {
        $this->ninios5[] = $r;
    }
    return $this->ninios5;
  }

  public function ninios_sexto(){
      $sql = "select * from vista_sexto";
  $resultado = $this->db->query($sql);
  while ($r =$resultado->fetch_assoc())
  {
      $this->ninios6[] = $r;
  }
  return $this->ninios6;
    }   

}

?>