<?php

require_once 'Controller/Controller.php';

class SecuredController  {

    public function __construct() {
        session_start();
    }

    public function verificarSesion(){
      if(!isset($_SESSION['MAIL'])){
        header('Location: ' .HOME);
        die();
      }
    }
}
