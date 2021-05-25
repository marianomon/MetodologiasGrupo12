<?php
require_once "../view/CentroView.php";
require_once "../model/CentroModel.php";
require_once "SecuredController.php";



class AdminController extends SecuredController{
  private $view;
  private $model;
  private $Titulo;

  function __construct(){
    parent::__construct();

    $this->view = new CentroView();
    $this->Titulo = "Bienvenido Administrador!!";
    $this->model = new CentroModel();
  }

  function CentroAdmin(){
     // $Peliculas = $this->model->GetPeliculas(); //pedir materiales aceptados
     // $Generos = $this->GeneroModel->GetGeneros();//aca podriamos pedir las noticias (en el proximo sprint)
     // $this->view->MostrarAdmin($this->Titulo, $Peliculas, $Generos);
  }
}
  



 ?>
