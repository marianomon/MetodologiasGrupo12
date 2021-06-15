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
    $this->view->Mostrar($this->Titulo, $Centro);
  }

  function PedidoDeRetiro(){
    $this->view->PedidoDeRetiro($this->Titulo);
  }

  function MostrarHomeUsuario(){
    $Centro = $this->model->GetMateriales();
    $this->view->MostrarHomeUsuario($this->Titulo,$Centro);
  }

  function MostrarBalanza(){
    $Materiales = $this->model->GetMateriales();
    $this->view->MostrarBalanza($this->Titulo, $Materiales);
  }

  function SubirBalanza(){
    session_start();
    $id = $_SESSION["userId"];
    $material = $_POST["material"];
    $peso = $_POST['kg'];
    $this->model->AgregarMaterialBalanza($material,$peso, $id);
    header('Location: ' . balanza);
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

  function BorrarMaterial($param){
    $this->model->BorrarMaterial($param[0]);
    header(HOMEADMIN);
  }

  function MostrarHomeAdmin(){
    $materiales = $this->model->GetMateriales();
    $this->view->MostrarHomeAdmin($this->Titulo, $materiales);
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
