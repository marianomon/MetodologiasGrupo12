<?php


define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . ':'.$_SERVER['SERVER_PORT'] .dirname($_SERVER["PHP_SELF"]));
define('HOMECIUDADANO', 'Location: http://'.$_SERVER["SERVER_NAME"] . ':'.$_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]). '/URL_CIUDADANO');
define('HOMEADMIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . ':'.$_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]). '/admin');
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . ':'.$_SERVER['SERVER_PORT']  .dirname($_SERVER["PHP_SELF"]). '/Login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . ':'.$_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]). '/LogOut');


class ConfigApp
{

    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'CentroController#Home',
      'home'=> 'CentroController#Home',
      'Login'=> 'LoginController#MostrarLogin',
      'Registrar'=> 'LoginController#DisplayRegistro', 
      'registrarse'=> 'LoginController#registrarse',  ////////////////
      'generarPedidoRetiro' => 'CentroController#PedidoDeRetiro',
      'agregarPedido' => 'CentroController#AgregarPedido',
      'iniciarSesion'=> 'LoginController#iniciarSesion',
      'URL_CIUDADANO'=> 'CentroController#MostrarHomeUsuario',
      'LogOut'=>'LoginController#Logout',
    ];
}

 ?>
