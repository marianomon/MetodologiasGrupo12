<?php


class CentroModel{

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=centroacopio;charset=utf8'
    , 'root', '');
  }

  function GetPeliculas(){
    $sentencia = $this->db->prepare( "select * from pelicula");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }


  function AgregarPedidomodel($nombre, $volumen){
    $sentencia = $this->db->prepare( "INSERT INTO pedidos (id_usuario, volumen) VALUES (?,?)");
    $sentencia->execute(array($nombre,$volumen));
    //header(home);                                     REDIRECCIONAR
  }

  }


 ?>
