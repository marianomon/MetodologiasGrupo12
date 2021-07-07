<?php
require_once "../view/CentroView.php";
require_once "../model/CentroModel.php";



class CentroController{
  private $view;
  private $model;
  private $Titulo;

  function __construct(){
    $this->view = new CentroView();
    $this->Titulo = "Cooperativa de Recuperadores Urbanos de Tandil";
    $this->model = new CentroModel();
  }

  function Home(){
    $Centro = $this->model->GetMateriales();
    $ofertas= $this->model->GetOfertas();
    $this->view->Mostrar($this->Titulo,$Centro,$ofertas);
  }
  function ObtenerOfertas(){
    $Centro = $this->model->GetMateriales();
    $ofertas= $this->model->GetOfertas();
    $this->view->getOfertas($this->Titulo,$Centro,$ofertas);
  }

  function PedidoDeRetiro(){
    $this->view->PedidoDeRetiro($this->Titulo);
  }

  function MostrarHomeUsuario(){
    $Centro = $this->model->GetMateriales();
    $this->view->MostrarHomeUsuario($this->Titulo,$Centro);
  }

  function postularse(){
    session_start();
    $id = $_SESSION["userId"];
    $idOferta = $_POST["idOferta"];
    $this->model->postularse($id, $idOferta);
    header('Location: ' . ofertas);
  }

  function MostrarOfertas(){
    session_start();
    $id = $_SESSION["userId"];
    $ofertas = $this->model->GetOfertasSelect($id);
    $this->view->MostrarOfertas($this->Titulo, $ofertas, $id);
  }

  function MostrarBalanza(){
    $activo = false;
    session_start();
    if(isset($_SESSION["userId"])){
      $activo = true;
    }
    $Materiales = $this->model->GetMateriales();
    $this->view->MostrarBalanza($this->Titulo, $Materiales,$activo);
  }

  function SubirBalanza(){
    session_start();
    if(isset($_SESSION["userId"])){
      $id = $_SESSION["userId"];
    }else{
      $user = $this->model->getAdmin();
      $id= $user["id_usuario"];
    }
    $material = $_POST["material"];
    $peso = $_POST['kg'];
    $this->model->AgregarMaterialBalanza($material,$peso, $id);
    header('Location: ' . balanza);
  }

  function agregarOferta(){
    session_start();
    $id = $_SESSION["userId"];
    $zona = $_POST["zona"];
    $texto = $_POST['textoLibre'];
    $espacio = $_POST['espacio'];
    $this->model->AgregarOferta($id,$zona,$texto,$espacio);
    header('Location: ' . ofertas);
  }

  function MostrarLoginCartonero(){
    $this->view->MostrarLoginCartonero($this->Titulo);
  }

  function AgregarPedido(){
    session_start();
    $id = $_SESSION["userId"];
    $volumen = $_POST["volumen"];
    $this->model->AgregarPedido($id,$volumen);
    $this->addImages($id);
  }

  function AgregarMaterial(){
    $nombre = $_POST["nombreMaterialAgregar"];
    $descripcion = $_POST['descripcionAgregar'];
    $this->model->AgregarMaterial($nombre,$descripcion);
    header(HOMEADMIN);
  }

  function EditarMaterial(){
    $nombre = $_POST["nombreMaterial"];
    $descripcion = $_POST['descripcionMaterial'];
    $id = $_POST['idMaterial'];
    $this->model->EditarMaterial($nombre,$descripcion,$id);
    header(HOMEADMIN);
  }


  function EditarUsuario(){
    $nombre = $_POST["nombre"];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $contraseña = $_POST['password'];
    $id = $_POST['idUsuario'];
    $hash = password_hash($contraseña,PASSWORD_DEFAULT);
    $this->model->EditarUsuario($nombre,$apellido,$id,$direccion,$hash);
    header(LISTAUSUARIOS);
  }

  function BorrarMaterial($param){
    $this->model->BorrarMaterial($param[0]);
    header(HOMEADMIN);
  }

  function BorrarUsuario($param){
    $this->model->BorrarUsuario($param[0]);
    header(LISTAUSUARIOS);
  }

  function aceptarUsuario($param){
    $this->model->aceptarUsuario($param[0]);
    header(LISTAUSUARIOS);
  }

  

  function MostrarHomeAdmin(){
    $materiales = $this->model->GetMateriales();
    $this->view->MostrarHomeAdmin($this->Titulo, $materiales);
  }


  function mostrarUsuarios(){
    $cartoneros = $this->model->GetCartoneros();
    //$ciudadanos = $this->model->GetCiudadanos();
    $this->view->MostrarUsuarios($this->Titulo, $cartoneros);
  }


  function ObtenerMatAportados(){
    session_start();
    $materialesAport = $this->model->GetMaterialesAportados($_SESSION["userId"]);
    $activo= true;
    $materiales = $this->model->GetMateriales();
    $this->view->MostrarMatAportados($this->Titulo, $materiales, $materialesAport,$activo);
  }

  function addImages($id){
    if ($_FILES['image']['tmp_name'] == null){
        header('Location: ' . generarPedidoRetiro);
    }else{
        if ($_FILES['image']['name']) {
            if ($_FILES['image']['type'] == "image/jpeg" || $_FILES['image']['type'] == "image/jpg" || $_FILES['image']['type'] == "image/png") {
                $this->model->addImages($id,$_FILES['image']);              
            }
        }
    }
    header('Location: ' . generarPedidoRetiro);
}
}

 ?>
