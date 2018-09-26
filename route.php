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
    case 'guardarVehiculo':
      $controller = new LogInController();
      $controller->showPostVehicle();
      break;
    case 'categoria':
      $controller = new paginaController();
      $controller->getVehicles($partesUrl[VALOR1]);
      break;
    case 'vehiculo':
      $controller = new paginaController();
      $controller->getDetailVehicle($partesUrl[VALOR1]);
      break;
    case 'IniciarSesion':
      $controller = new LogInController();
      $controller-> getLogin();
      break;
    case 'cerrarSesion':
      $controller = new LogInController();
      $controller->logOut();
      break;
    case 'verificarAdmin':
      $controller = new LogInController();
      $controller-> verify();
      break;
    case 'admin':
      $controller = new LogInController();
      $controller-> getAdmin();
      break;
    case 'abmVehiculo':
      $controller = new LogInController();
      $controller-> getAdminVehiculos();
      break;
    case 'abmCategoria':
      $controller = new LogInController();
      $controller-> getAdminCategorias();
      break;
    case 'borrarVehiculo':
      $controller = new LogInController();
      $controller-> deleteVehicles($partesUrl[VALOR1]);
      break;
    case 'editarVehiculo':
      $controller = new LogInController();
      $controller-> editVehicles($partesUrl[VALOR1]);
      break;
    case 'confirmarEditarVehiculo':
      $controller = new LogInController();
      $controller-> confirmEditVehicles($partesUrl[VALOR1]);
      break;
    case 'editarCategoria':
      $controller = new LogInController();
      $controller-> editCategorie($partesUrl[VALOR1]);
      break;
    case 'confirmarEditarCategoria':
      $controller = new LogInController();
      $controller-> confirmEditCategorie();
      break;
    case 'guardarCategoria':
      $controller = new LogInController();
      $controller->getCategorie();
      break;
    default:
      $controller = new paginaController();
      $controller->showCategories();
      break;
  }
?>
