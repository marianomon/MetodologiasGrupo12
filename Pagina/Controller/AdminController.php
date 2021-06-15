<?php
require_once "SecuredController.php";
require_once "../Model/AdminModel.php";
require_once "../View/AdminView.php";

class AdminController extends SecuredController{
  private $view;
  private $model;
  private $Titulo;

  function __construct(){
    parent::__construct();

    $this->view = new AdminView();
    $this->Titulo = "Bienvenido Administrador!!";
    $this->model = new AdminModel();
  }
  public function GetPedidos(){
    $Pedidos = $this->model->GetPedidosJoin();
    $this->view->DisplayProductsId($Pedidos);  
  }
}
?>
