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

  function AgregarMaterialBalanza($material,$peso, $id){
    $sentencia = $this->db->prepare("INSERT INTO `materialesRecogidos`( `idMaterial`, `cantidad`, `idUsuario`) VALUES (?,?,?)");
    $sentencia->execute(array($nombre,$volumen, $id));
  }


  function AgregarPedido($nombre, $volumen){
    $sentencia = $this->db->prepare("INSERT INTO `pedidos`( `id_usuario`, `volumen`) VALUES (?,?)");
    $sentencia->execute(array($nombre,$volumen));
  }

  function AgregarMaterial($nombre, $desc){
    $sentencia = $this->db->prepare("INSERT INTO `materiales`( `nombre`, `descripcion`) VALUES (?,?)");
    $sentencia->execute(array($nombre,$desc));
  }

  function EditarMaterial($nombre,$descripcion,$id){
    $sentencia = $this->db->prepare( "UPDATE materiales set nombre = ?, descripcion = ? where id_material=?");
    $sentencia->execute(array($nombre,$descripcion,$id));
  }

  function BorrarMaterial($id){
    $sentencia = $this->db->prepare("DELETE from materiales where id_material=?");
    $sentencia->execute(array($id));
    }

  private function uploadImage($image){
    $target = "../CentroAcopio/Imagenes/" . uniqid() . "." . strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));  
    move_uploaded_file($image['tmp_name'], $target);
    return $target;
}

  public function addImages($id,$image = null){
    $pathImg = null;
    $pathImg = $this->uploadImage($image);
        if ($image){
        $sentencia = $this->db->prepare("INSERT INTO imagen(id_usuario,direccion) VALUES(?,?)");
        $sentencia->execute(array($id,$pathImg));
    }
}
}


 ?>
