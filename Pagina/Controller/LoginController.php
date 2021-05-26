<?php

require_once "../View/LoginView.php";
require_once "../Model/LoginModel.php";




class LoginController
{

  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new LoginView();
    $this->model = new LoginModel();
    $this->Titulo = "Login";
  }

function login(){
  $this->view->mostrarLogin($this->Titulo);
}

function verificarLogin(){
  $usuario = $_POST["usuario"];
  $pass = $_POST["contrasenia"];
  $db_usuario = $this->model->getUser($usuario);
  
  if (isset($db_usuario)) {
    if (password_verify($pass, $db_usuario[0]["pass"])){
      session_start();
      $_SESSION["usuario"] = "$usuario";
      header(HOMEADMIN);
    }else {
        $this->view->mostrarLogin($this->Titulo, "contrasenia incorrecta");
    }
  }else {
    echo "no hay usuario";
  }

}

}
 ?>
