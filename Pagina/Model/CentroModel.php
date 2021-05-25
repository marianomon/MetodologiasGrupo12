<?php


class CentroModel
{

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=db_generos;charset=utf8'
    , 'root', '');
  }

  function GetPeliculas(){
    $sentencia = $this->db->prepare( "select * from pelicula");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
}


 ?>
