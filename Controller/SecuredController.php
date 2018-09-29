<?php

require_once 'Controller/Controller.php';

class securedController extends Controller {

    public function __construct(){

        session_start();
        if(!isset($_SESSION['MAIL'])){
            header('Location: '.HOME);
            die();
        }

    }
}


 ?>
