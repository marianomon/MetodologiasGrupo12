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

  function MostrarMatAportados($Titulo, $Materiales, $materialesAport){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('materiales',$Materiales);
    $this->Smarty->assign('materialesAport',$materialesAport);
    $this->Smarty->display('templates/MisMaterialesAportados.tpl');
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
  public function MostrarHomeAdmin($Titulo,$Materiales){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('materiales',$Materiales);
    $this->Smarty->display('templates/materialesAdmin.tpl');
  }

  public function MostrarBalanza($Titulo, $Materiales){
    $this->Smarty->assign('Titulo', $Titulo);
    $this->Smarty->assign('materiales',$Materiales);
    $this->Smarty->display('templates/Balanza.tpl');
  }

  public function MostrarLoginCartonero($Titulo){
    $this->Smarty->assign('Titulo', $Titulo);
    $this->Smarty->display('templates/LoginCartonero.tpl');
  }


  
}
  ?>
