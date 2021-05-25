<?php


class CentroModel
{

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=centrodeacopio;charset=utf8'
    , 'root', '');
  }

  function GetMateriales(){
    $sentencia = $this->db->prepare( "select * from materiales");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }


  function AgregarPedidomodel($nombre, $volumen){
    $sentencia = $this->db->prepare( "INSERT INTO pedidos (id_usuario, volumen) VALUES (?,?)");
    $sentencia->execute(array($nombre,$volumen));
    header(HOME);                                   

  }
}


 ?>
