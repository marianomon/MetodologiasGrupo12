<?php

require('libs/Smarty.class.php');

class CentroView
{
  private $Smarty;

  function __construct(){
    $this->Smarty = new Smarty();
    $r = $this->Smarty->assign('root', "http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function Mostrar($Titulo, $Materiales){ //  DEJE ESTE COMO EJEMPLO POR SI NO RECUERDAN COMO ES
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('materiales',$Materiales);
    $this->Smarty->display('templates/home.tpl');
  }

  function PedidoDeRetiro($Titulo){
    $this->Smarty->assign('Titulo', $Titulo);
    $this->Smarty->display('templates/PedidoDeRetiro.tpl');
  }
  public function MostrarHomeUsuario($Titulo,$Materiales){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('materiales',$Materiales);
    $this->Smarty->display('templates/homeUsuario.tpl');
}

  
}
  ?>
