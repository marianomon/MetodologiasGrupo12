<?php
require_once "config/ConfigApp.php";
require_once "../Controller/CentroController.php";
require_once "../Controller/AdminController.php";
require_once "../model/LoginModel.php";
require_once "../view/LoginView.php";
class LoginController {
    private $model;
    private $view;
    private $controller;
    private $Titulo;
	function __construct(){
        $this->model = new LoginModel();
        $this->view = new LoginView();
        $this->Titulo = "Cooperativa de Recuperadores Urbanos de Tandil";
    }
    public function iniciarSesion(){
        $password = $_POST['password'];
        $usuario = $this->model->getPassword($_POST['email']);
        if (isset($usuario) && password_verify($password,$usuario->contraseña)){
            session_start();
            $_SESSION['email'] = $usuario->email;
            $_SESSION['userId'] = $usuario->id_usuario;
            echo($usuario->isAdm);
            if ($usuario->isAdm==1) {
                header("Location: " . URL_ADMINISTRADOR );
            }
            elseif($usuario->isAdm==0) {
                header("Location: " . URL_CIUDADANO);
            }
            elseif($usuario->isAdm==-1) {
                header("Location: " . URL_CARTONERO);
            }
        }else{
            header("Location: " . Login);
        }
    }
    public function MostrarLogin(){
        $this->view->DisplayLogin($this->Titulo);
    }


    public function logout(){
        session_start();
        session_destroy();
        header("Location: " . Login);
    }
}