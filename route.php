<?php
  require_once 'Controller/paginaController.php';
  require_once 'Controller/LogInController.php';



  define('ACTION',0);
  define('VALOR1',1);
  define('VALOR2',2);
  define('VALOR3',3);
  define('VALOR4',4);
  define('VALOR5',5);
  define('VALOR6',6);



  if(!isset($_GET['action']))
  $_GET['action'] = '';

  $action = $_GET['action'];
  $partesUrl = explode('/', $action);

  switch ($partesUrl[ACTION]) {
    case 'logIn':
      $controller = new LogInController();
      $controller-> verify();
      break;
    case 'cerrarSesion':
      $controller = new LogInController();
      $controller->logOut();
      break;
    case 'admin':
      $controller = new paginaController();
      $controller->showAdmin();
      break;
    case 'admin/vehiculo':
      $controller = new paginaController();
      $controller->showAddVehicle();
      break;
    case 'guardarVehiculo':
      $controller = new paginaController();
      $controller->showPostVehicle();
      break;
    case 'vehiculo':
      $controller = new paginaController();
      $controller->showDetailVehicle($partesUrl[VALOR1]);
      break;
    default:
      $controller = new paginaController();
      $controller->showCategories();
      break;
  }
?>
