<?php
require_once "../view/CentroView.php";
require_once "../model/CentroModel.php";



class AdminController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {


    $this->view = new CentroView();
    $this->Titulo = "Bienvenido Administrador!!";
    $this->model = new CentroModel();
  }

}

 ?>
