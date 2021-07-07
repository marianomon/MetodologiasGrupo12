<?php

require('libs/Smarty.class.php');

class CentroView
{
  private $Smarty;

  function __construct(){
    $this->Smarty = new Smarty();
    $r = $this->Smarty->assign('root', "http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function Mostrar($Titulo, $Materiales,$oferta){ //  DEJE ESTE COMO EJEMPLO POR SI NO RECUERDAN COMO ES
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('materiales',$Materiales);
    $this->Smarty->assign('ofertas',$oferta);
    $this->Smarty->display('templates/home.tpl');
  }

  public function MostrarOfertas($Titulo, $Oferta, $id, $Postulante){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('ofertas',$Oferta);
    $this->Smarty->assign('postulantes',$Postulante);
    $this->Smarty->assign('id',$id);
    $this->Smarty->display('templates/ofertas.tpl');
  }

  function getOfertas($Titulo, $Materiales,$Oferta){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('materiales',$Materiales);
    $this->Smarty->assign('ofertas',$Oferta);
    $this->Smarty->display('templates/ofertashome.tpl');
  }

  public function MostrarUsuarios($Titulo,$cartoneros){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('cartoneros',$cartoneros);
    $this->Smarty->display('templates/listaUsuarios.tpl');
  }
  
  function MostrarMatAportados($Titulo, $Materiales, $materialesAport,$activo){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('materiales',$Materiales);
    $this->Smarty->assign('Activo', $activo);
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

  public function MostrarBalanza($Titulo, $Materiales,$activo){
    $this->Smarty->assign('Titulo', $Titulo);
    $this->Smarty->assign('Activo', $activo);
    $this->Smarty->assign('materiales',$Materiales);
    $this->Smarty->display('templates/Balanza.tpl');
  }

  public function MostrarLoginCartonero($Titulo){
    $this->Smarty->assign('Titulo', $Titulo);
    $this->Smarty->display('templates/LoginCartonero.tpl');
  }


  
}
  ?>
