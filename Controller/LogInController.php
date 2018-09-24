<?php

require_once 'Views/adminView.php';
require_once 'Model/concesionaria_Autos_Model.php';




class LogInController {

  public function __construct() {
    session_start();
  }


  public function verify(){
    $mail = $_POST['email_Iniciar_Sesion'];
    $password = $_POST['contrasenia_Iniciar_Sesion'];
    $model = new PaginaModel();
    $view = new adminView();

    if(!empty($mail) && !empty($password)){
           $user = $model->getUser($mail);
           if((!empty($user)) && password_verify($password, $user->contrasenia)) {
               session_start();
               $_SESSION['MAIL'] = $mail;
               header("Location: admin");
               die();
           }
           else {
               header("Location: indsadadasdasddexAdmin");
           }
       }


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

}
