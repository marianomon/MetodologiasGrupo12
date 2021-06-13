<?php
class LoginView {
    private $Smarty;

    function __construct()
  {
    $this->Smarty = new Smarty();
  }
    public function DisplayLogin(){
        $this->Smarty->assign('Titulo',"Log-In");
        $this->Smarty->display('templates/ingreso.tpl');
    }


  public function DisplayRegistroCiudadano(){
    $this->Smarty->assign('Titulo',"Registro");
    $this->Smarty->display('templates/RegistroCiudadano.tpl');
  }

  public function DisplayRegistroCartonero(){
    $this->Smarty->assign('Titulo',"Registro");
    $this->Smarty->display('templates/RegistroCartonero.tpl');
  }
    
    
}
?>