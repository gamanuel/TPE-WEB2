<?php

require_once 'Controller/Controller.php';

class SecuredController extends Controller  {

    public function __construct() {
        session_start();
    }

    public function autenticado(){
      if(isset($_SESSION['USERNAME'])){ // si esta logueado
          if (time() - $_SESSION['LAST_ACTIVITY'] > 180000) { // expiro el timeout
              header('Location: '.LOGOUT);
              die();
          }

          $_SESSION['LAST_ACTIVITY'] = time();
          return true;
      }
      else {
          header('Location: ' . LOGIN);
          die();
        }
    }

}
