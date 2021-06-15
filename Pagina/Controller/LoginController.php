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
            $_SESSION['admin'] = $usuario->isAdm;
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
    
    public function DisplayRegistroCiudadano(){
        $this->view->DisplayRegistroCiudadano();
    }

    public function DisplayRegistroCartonero(){
        $this->view->DisplayRegistroCartonero();
    }

    public function registrarse(){
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $contraseña=$_POST['password'];
        $email=$_POST['email'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];
        $horarioPreferencia=$_POST['horarioPreferencia'];
        $hash = password_hash($contraseña,PASSWORD_DEFAULT);
        $this->model->InsertarUsuario($nombre,$hash,$email,$direccion,$telefono,$horarioPreferencia,$apellido);
        $this->iniciarSesion();
    }

    public function registrarseCartonero(){
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $contraseña=$_POST['password'];
        $direccion=$_POST['direccion'];
        $nacimiento=$_POST['nacimiento'];
        $dni=$_POST['dni'];
        $userType=$_POST['isAdm'];
        $active=$_POST['active'];
        echo($active);
        $hash = password_hash($contraseña,PASSWORD_DEFAULT);
        $this->model->InsertarUsuarioCart($nombre,$hash,$direccion,$nacimiento,$apellido,$userType,$dni,$active);
        session_start();
        if($_SESSION['admin'] == 1){
            header(LISTAUSUARIOS);
        }else{
            $this->iniciarSesion();
        }
        
        
        
    }
}