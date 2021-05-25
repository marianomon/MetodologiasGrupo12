<?php


class PelisModel
{

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'  ////MODIFICAR BASE DE DATOS
    .'dbname=db_generos;charset=utf8'
    , 'root', '');
  }

  /*function GetPeliculas(){   ACA PARA PEDIR LOS MATERIALES ACEPTADOS
    $sentencia = $this->db->prepare( "select * from pelicula");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }*/ 

}


 ?>
