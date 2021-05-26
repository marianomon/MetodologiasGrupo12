<?php

require('libs/Smarty.class.php');

class CentroView
{
  private $Smarty;

  function __construct(){
    $this->Smarty = new Smarty();
    $r = $this->Smarty->assign('root', "http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function Mostrar($Titulo, $Peliculas, $Generos){ //  DEJE ESTE COMO EJEMPLO POR SI NO RECUERDAN COMO ES
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Peliculas',$Peliculas);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->display('templates/home.tpl');
  }

<<<<<<< Updated upstream
=======
  function PedidoDeRetiro($Titulo){
    $this->Smarty->assign('Titulo', $Titulo);
    $this->Smarty->display('templates/PedidoDeRetiro.tpl');
  }

  function Registro($Titulo){
    $this->Smarty->assign('Titulo', $Titulo);
    $this->Smarty->display('templates/RegistroCiudadano.tpl');
  }

  function MostrarLogin($Titulo){
    $this->Smarty->assign('Titulo', $Titulo);
    $this->Smarty->display('templates/ingreso.tpl');
  }

>>>>>>> Stashed changes
  
}
  ?>
