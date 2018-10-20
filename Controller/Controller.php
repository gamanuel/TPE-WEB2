<?php

define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');
define('LOGIN', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/ver');
define('LOGOUT', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/logout');



class Controller {

  protected $view;
  protected $viewAdmin;
  protected $modelCategoria;
  protected $modelVehiculo;
  protected $modelUser;


  public function __construct(){
    session_start();
    
  }
}
