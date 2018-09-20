<?php

require_once 'Controller/Controller.php';

class SecuredController extends Controller  {

    public function __construct() {
        session_start();
    }

    public function autenticado(){
      if(!isset($_SESSION['USERNAME'])){
         header('Location: login');
         die();
        }
    }




}
