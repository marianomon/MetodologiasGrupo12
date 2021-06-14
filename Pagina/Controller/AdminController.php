<?php
require_once "../View/CentroView.php";
require_once "../Model/CentroModel.php";
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

}
  



 ?>
