<?php
require_once "./controller/SecuredController.php";
require_once "./controller/AdminController.php";
require_once "./model/SecuredController.php";
require_once "./model/LoginModel.php";
require_once "./view/LoginView.php";
require_once "./view/CentroView.php";
class LoginController {
    private $model;
    private $view;
    private $controller;
	function __construct(){
        $this->model = new LoginModel();
        $this->view = new LoginView();
    }
    public function iniciarSesion(){
        $password = $_POST['password'];
        $usuario = $this->model->getPassword($_POST['email']);
        
        if (isset($usuario) && password_verify($password,$usuario->contraseña)){
            session_start();
            $_SESSION['email'] = $usuario->email;
            $_SESSION['userId'] = $usuario->id_usuario;
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
            header("Location: " . URL_LOGIN);
        }
    }
    public function login(){
        $this->view->DisplayLogin();
    }
    public function logout(){
        session_start();
        session_destroy();
        header("Location: " . URL_LOGIN);
    }
}