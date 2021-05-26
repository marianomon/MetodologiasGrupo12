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
    $Centro = $this->model->GetPeliculas(); //pedir materiales aceptados
    //$Generos = $this->GeneroModel->GetGeneros(); //aca podriamos pedir las noticias (en el proximo sprint)
    $this->view->Mostrar($this->Titulo, $Centro);
  }

  function PedidoDeRetiro(){
    $this->view->PedidoDeRetiro($this->Titulo);
  }

  function AgregarPedido(){
    $random = rand(5, 15);
    if($random%2==0){
      $nombre = $_POST["id"];
    $volumen = $_POST["volumen"];
    $this->model->AgregarPedidomodel($nombre,$volumen);
    }else{
      echo'<script type="text/javascript">
    alert("Su locacion esta demaciado lejos del centro de acopio. Debera brindar sus materiales usted mismo/a");
    window.location.href="generarPedidoRetiro";
    </script>';
    }
    
  }
}

 ?>
