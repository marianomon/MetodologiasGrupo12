<?php
require_once('./CentroAcopio/libs/Smarty.class.php');
class LoginView {
    private $Smarty;
    function __construct(){
        $this->Smarty = new Smarty();
    }
    public function DisplayLogin(){
        $this->Smarty->assign('titulo',"Login");
        $this->Smarty->assign('BASE_URL',BASE_URL);
        $this->Smarty->display('templates/ingreso.tpl');
    }
}
?>