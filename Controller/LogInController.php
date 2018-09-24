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


  }

  public function getLogin(){
    $view = new ProgramaView();
    $view->mostrarLogIn();
  }

  public function getAdmin(){
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
    if(!isset($_SESSION['MAIL'])){
      header('Location: ' .HOME);
      die();
    }
    else {
      $view = new adminView();
      $categoriaModel = new PaginaModel();
      $baseDeDatosAut = $categoriaModel->getVehicles();
      $baseDeDatosCat = $categoriaModel->getCategories();
      $view->mostrarAbmVehiculos($baseDeDatosAut,$baseDeDatosCat);
    }
  }

  public function deleteVehicles($id_delete){
    if(!isset($_SESSION['MAIL'])){
      header('Location: ' .HOME);
      die();
    }
    else {
      $model = new PaginaModel();
      $model->deleteVehiculo($id_delete);
      header('Location:'.HOME.'abmVehiculo');
      die();
    }
  }

}
