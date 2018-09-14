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
    case 'Datos_Iniciar_Sesion':
      $controller = new paginaController();
      $controller->postLogin($partesUrl[VALOR1],$partesUrl[VALOR2]);
      break;
    case 'categoria':
      $controller = new paginaController();
      $controller->showVehicles();
    default:
      $controller = new paginaController();
      $controller->showCategories();

      break;
  }








?>
