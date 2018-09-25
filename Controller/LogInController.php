<?php

require_once 'Views/adminView.php';
require_once 'Views/paginaView.php';
require_once 'Model/concesionaria_Autos_Model.php';
require_once  'Controller/Controller.php';




class LogInController extends Controller {

  public function __construct() {
    session_start();
  }


  public function verify(){
    $mail = $_POST['email_Iniciar_Sesion'];
    $password = $_POST['contrasenia_Iniciar_Sesion'];
    $model = new PaginaModel();
    $viewAdmin = new adminView();

    if(!empty($mail) && !empty($password)){
           $user = $model->getUser($mail);
           if((!empty($user)) && password_verify($password, $user->contrasenia)) {
               session_start();
               $_SESSION['MAIL'] = $mail;
               header("Location: admin");
               die();
           }
           else {
            $viewPagina = new ProgramaView();
            $mostrarError = $viewPagina->mostrarLogIn("Usuario o contraseña incorrecta");
           }
       }
       else {
        $viewPagina = new ProgramaView();
        $mostrarError = $viewPagina->mostrarLogIn("Usuario o contraseña incorrecta");
       }



  }

  public function verificarSesion(){
    if(!isset($_SESSION['MAIL'])){
      header('Location: ' .HOME);
      die();
    }
  }

  public function getLogin(){
    $view = new ProgramaView();
    $view->mostrarLogIn();
  }

  public function getAdmin(){
    $this->verificarSesion();
    $view = new adminView();
    $view->mostrarAdmin();
  }

  public function logOut(){
    session_start();
    session_destroy();
    header('Location: ' .ver);
    die();
  }

  public function getAdminVehiculos(){
    $this->verificarSesion();
    $view = new adminView();
    $categoriaModel = new PaginaModel();
    $baseDeDatosAut = $categoriaModel->getVehicles();
    $baseDeDatosCat = $categoriaModel->getCategories();
    $view->mostrarAbmVehiculos($baseDeDatosAut,$baseDeDatosCat);

  }

  public function getAdminCategorias(){
    $this->verificarSesion();
    $view = new adminView();
    $categoriaModel = new PaginaModel();
    $baseDeDatosCat = $categoriaModel->getCategories();
    $view->mostrarAbmCategoria($baseDeDatosCat);

  }

  public function showPostVehicle(){
    $this->verificarSesion();
    $categoria = $_POST['vehiculo_Categoria'];
    $modelo = $_POST['vehiculo_Modelo'];
    $descripcion = $_POST['vehiculo_Descripcion'];
    $anio = $_POST['vehiculo_Anio'];
    $kilometros = $_POST['vehiculo_Kilometros'];
    $precio = $_POST['vehiculo_Precio'];
    $paginaModel = new PaginaModel();
    $paginaModel-> guardarVehiculo($categoria,$modelo,$descripcion,$anio,$kilometros,$precio);
    header('Location: abmVehiculo');
    die();

  }

  public function deleteVehicles($id_delete){
    $this->verificarSesion();
    $model = new PaginaModel();
    $model->deleteVehiculo($id_delete);
    header('Location:'.HOME.'abmVehiculo');
    die();

  }

  public function editVehicles($id_editar){
    $this->verificarSesion();
    $view = new adminView();
    $model = new PaginaModel();
    $baseDeDatosCat = $model->getCategories();
    $editado = $model->getDetailVehicle_byid($id_editar);
    $view->editarVehiculos($baseDeDatosCat,$editado);

  }


  public function confirmEditVehicles(){
    $id = $_POST['vehiculo_id'];
    $categoria = $_POST['vehiculo_Categoria'];
    $modelo = $_POST['vehiculo_Modelo'];
    $descripcion = $_POST['vehiculo_Descripcion'];
    $anio = $_POST['vehiculo_Anio'];
    $kilometros = $_POST['vehiculo_Kilometros'];
    $precio = $_POST['vehiculo_Precio'];
    $paginaModel = new PaginaModel();
    $paginaModel-> confirmarEditarVehiculo($id,$categoria,$modelo,$descripcion,$anio,$kilometros,$precio);
    header('Location:'.HOME.'abmVehiculo');
    die();
  }


}
