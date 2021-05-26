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
    $Centro = $this->model->GetMateriales(); //pedir materiales aceptados
    //$Generos = $this->GeneroModel->GetGeneros(); //aca podriamos pedir las noticias (en el proximo sprint)
    $this->view->Mostrar($this->Titulo, $Centro);
  }

  function PedidoDeRetiro(){
    $this->view->PedidoDeRetiro($this->Titulo);
  }

  function MostrarHomeUsuario(){
    $Centro = $this->model->GetMateriales();
    $this->view->MostrarHomeUsuario($this->Titulo,$Centro);
  }

  function AgregarPedido(){
    session_start();
    $id = $_SESSION["userId"];
    $volumen = $_POST["volumen"];
    $this->model->AgregarPedido($id,$volumen);
    $this->addImages($id);
    //header(HOMECIUDADANO);
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
