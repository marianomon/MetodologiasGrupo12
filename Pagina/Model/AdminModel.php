<?php

class AdminModel{
  function __construct(){
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=centrodeacopio;charset=utf8'
    , 'root', '');
  }

  function GetPedidos(){
    $sentencia = $this->db->prepare( "SELECT * from pedidos");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
  }

  public function GetPedidosJoin(){
      $sentencia = $this->db->prepare( "SELECT P.*, U.apellido as apellidoCiud from pedidos P join usuario U on P.id_usuario = U.id_usuario");
      $sentencia->execute();
      $Pedidos = $sentencia->fetchAll(PDO::FETCH_OBJ);
      return $Pedidos;
  }	
}
 ?>
