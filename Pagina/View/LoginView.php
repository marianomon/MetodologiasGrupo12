<?php
class LoginView {
    private $Smarty;

    function __construct()
  {
    $this->Smarty = new Smarty();
  }
    public function DisplayLogin($Titulo){
        $this->Smarty->assign('Titulo',$Titulo);
        $this->Smarty->display('templates/ingreso.tpl');
    }

    
}
?>