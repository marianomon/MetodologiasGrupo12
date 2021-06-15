<?php


define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . ':'.$_SERVER['SERVER_PORT'] .dirname($_SERVER["PHP_SELF"]));
define('HOMECIUDADANO', 'Location: http://'.$_SERVER["SERVER_NAME"] . ':'.$_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]). '/URL_CIUDADANO');
define('HOMEADMIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . ':'.$_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]). '/URL_ADMINISTRADOR');
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . ':'.$_SERVER['SERVER_PORT']  .dirname($_SERVER["PHP_SELF"]). '/Login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . ':'.$_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]). '/LogOut');
define('LISTAUSUARIOS', 'Location: http://'.$_SERVER["SERVER_NAME"] . ':'.$_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]). '/mostrarUsuarios');


class ConfigApp
{

    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'CentroController#Home',
      'home'=> 'CentroController#Home',
      'Login'=> 'LoginController#MostrarLogin',
      'registrarCiudadano' => 'LoginController#DisplayRegistroCiudadano',
      'registrarCartonero' => 'LoginController#DisplayRegistroCartonero',
      'registrarse'=> 'LoginController#registrarse',
      'registrarseCartonero' => 'LoginController#registrarseCartonero', 
      'balanza' => 'CentroController#MostrarBalanza', 
      'subirBalanza' => 'CentroController#SubirBalanza',
      'generarPedidoRetiro' => 'CentroController#PedidoDeRetiro',
      'agregarPedido' => 'CentroController#AgregarPedido',
      'agregarMaterial' => 'CentroController#AgregarMaterial',
      'borrarMaterial' => 'CentroController#BorrarMaterial',
      'editarMaterial' => 'CentroController#EditarMaterial',
      'iniciarSesion'=> 'LoginController#iniciarSesion',
      'URL_CIUDADANO'=> 'CentroController#MostrarHomeUsuario',
      'URL_ADMINISTRADOR'=> 'CentroController#MostrarHomeAdmin',
      'LogOut'=>'LoginController#Logout',
      'mostrarUsuarios'=>'CentroController#mostrarUsuarios',
      'borrarUsuario' => 'CentroController#BorrarUsuario',
    ];
}

 ?>
