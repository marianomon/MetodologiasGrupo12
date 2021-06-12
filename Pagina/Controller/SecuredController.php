<?php

class SecuredController
{

  function __construct(){

    session_start();
    if(isset($_SESSION["email"])){
      header(HOMEADMIN);
    }else{
      header(LOGIN);
    }
  }

}





 ?>
