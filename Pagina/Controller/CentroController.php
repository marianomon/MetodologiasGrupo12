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



}

 ?>
