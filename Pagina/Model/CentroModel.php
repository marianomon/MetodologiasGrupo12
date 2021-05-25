<?php


class CentroModel
{

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'  ////MODIFICAR BASE DE DATOS
    .'dbname=centroAcopio;charset=utf8'
    , 'root', '');
  }

  /*function GetPeliculas(){   ACA PARA PEDIR LOS MATERIALES ACEPTADOS
    $sentencia = $this->db->prepare( "select * from pelicula");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }*/ 

}


 ?>
