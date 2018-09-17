<?php
  require_once 'Controller/paginaController.php';


  define('ACTION',0);
  define('VALOR1',1);
  define('VALOR2',2);

  if(!isset($_GET['action']))
  $_GET['action'] = '';

  $action = $_GET['action'];
  $partesUrl = explode('/', $action);

  switch ($partesUrl[ACTION]) {
    case 'admin':
      $controller = new paginaController();
      $controller->postLogin($partesUrl[VALOR1],$partesUrl[VALOR2]);
      break;
    default:
      $controller = new paginaController();
      $controller->showCategories();
      break;
  }
?>
