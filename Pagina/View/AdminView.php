<?php

require_once('libs/Smarty.class.php');

class AdminView {
    private $Smarty;
    function __construct(){
        $this->Smarty = new Smarty();
    }

    public function DisplayProductsId($Pedidos){
        $this->Smarty->assign('titulo',"Pedidos");
        $this->Smarty->assign('BASE_URL',BASE_URL);
        $this->Smarty->assign('list_Pedidos',$Pedidos);
        $this->Smarty->display('templates/PedidosADM.tpl');
    }
}
?>