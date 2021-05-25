<?php


class CentroModel
{

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=centrodeacopio;charset=utf8'
    , 'root', '');
  }

  function GetPeliculas(){
    $sentencia = $this->db->prepare( "select * from pelicula");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }


  function AgregarPedidomodel($nombre, $volumen){
    $sentencia = $this->db->prepare( "insert into pedidos (nombre, volumen) values (?,?)");
    $sentencia->execute(array($nombre,$volumen));
    header(home);

  }
}


 ?>
