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

  function GetOfertas(){
    $sentencia = $this->db->prepare( "select * from oferta");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetOfertasSelect(){
    $sentencia = $this->db->prepare( "select * from oferta");
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function BorrarPostulacion($param){
    $sentencia = $this->db->prepare("DELETE from postulantes where idOferta=?");
    $sentencia->execute(array($param));
  }

  function GetPostulantes($id){
    $sentencia = $this->db->prepare( "SELECT usuario.nombre,usuario.apellido,usuario.direccion
                                      FROM postulantes AS p
                                      INNER JOIN oferta ON oferta.id_usuario=? AND oferta.id_oferta=p.idOferta
                                      INNER JOIN usuario ON usuario.id_usuario=p.idUsuario;");
    $sentencia->execute(array($id));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function postularse($id, $idOferta){
    $sentencia = $this->db->prepare("INSERT INTO `postulantes`( `idOferta`, `idUsuario`, `activo`) VALUES (?,?,?)");
    $sentencia->execute(array($idOferta,$id, false));
  }

  function GetCartoneros(){
    $sentencia = $this->db->prepare( "select * from usuario where isAdm= -1 ");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function aceptarUsuario($id){
    $sentencia = $this->db->prepare( "UPDATE usuario set activo = ? where id_usuario =?");
    $sentencia->execute(array(1,$id));
  }

  function BorrarUsuario($id){
    $sentencia = $this->db->prepare("DELETE from usuario where id_usuario=?");
    $sentencia->execute(array($id));
  }

  function EditarUsuario($nombre,$apellido,$id,$direccion,$contraseña){
    $sentencia = $this->db->prepare( "UPDATE usuario set nombre = ?, apellido = ?,direccion=?,contraseña=? where id_usuario=?");
    $sentencia->execute(array($nombre,$apellido,$direccion,$contraseña,$id));
  }

  function GetCiudadanos(){
    $sentencia = $this->db->prepare( "select * from usuario where isAdm = 1");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function AgregarMaterialBalanza($material,$peso, $id){
    $sentencia = $this->db->prepare("INSERT INTO `materialesRecogidos`( `idMaterial`, `cantidad`, `idUsuario`) VALUES (?,?,?)");
    $sentencia->execute(array($material,$peso, $id));
  }

  function AgregarOferta($id,$zona,$texto,$espacio){
    $sentencia = $this->db->prepare("INSERT INTO `oferta`(`id_usuario`, `zonaGeografica`, `espacio`, `texto`) VALUES (?,?,?,?)");
    $sentencia->execute(array($id,$zona,$espacio,$texto));
  }

  function GetMaterialesAportados($id){
    $sentencia = $this->db->prepare( "select * from materialesrecogidos WHERE idUsuario = ?");
    $sentencia->execute(array($id));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
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
