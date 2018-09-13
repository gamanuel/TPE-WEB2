<?php
  require_once 'Controller/paginaController.php';

  define('ACTION',0);
  define('VALOR1',1);

  if(!isset($_GET['action']))
  $_GET['action'] = '';

  $action = $_GET['action'];
  $partesUrl = explode('/', $action);

  switch ($partesUrl[ACTION]) {
    case 'guardar':
    default:
      $controller = new paginaController();
      $controller->showCategories();
      break;
  }








?>
