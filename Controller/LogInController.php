<?php

require_once 'Views/UsuarioView.php';
require_once 'Model/userModel.php';
require_once 'Controller/Controller.php';

class LogInController extends Controller {

  public function __construct() {
    parent::__construct();
    $this->modelUser = new userModel();
    $this->view= new UsuarioView();
  }


  public function verify(){
    $mail = $_POST['email_Iniciar_Sesion'];
    $password = $_POST['contrasenia_Iniciar_Sesion'];

    if(!empty($mail) && !empty($password)){
           $user = $this->modelUser->getUser($mail);
           if((!empty($user)) && password_verify($password, $user->contrasenia)) {
               session_start();
               $_SESSION['MAIL'] = $mail;
               header("Location: admin");
               die();
           }
           else {
            $mostrarError = $this->view->mostrarLogIn("Usuario o contraseña incorrecta");
            die();
           }
       }
       else {
        $mostrarError = $this->view->mostrarLogIn("Usuario o contraseña incorrecta");
        die();
       }
  }

  public function logOut(){
    session_start();
    session_destroy();
    header('Location: ' .ver);
    die();
  }



}
