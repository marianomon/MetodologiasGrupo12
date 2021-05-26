<?php
require_once('./CentroAcopio/libs/Smarty.class.php');
class RegistroView{
    private $Smarty;
    function __construct(){
        $this->Smarty = new Smarty();
    }
    public function DisplayRegistro(){
        $this->Smarty->assign('titulo',"Registro");
        $this->Smarty->display('templates/RegistroCiudadano.tpl');
    }
}
?>