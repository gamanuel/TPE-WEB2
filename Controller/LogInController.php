<?php

require_once 'Views/paginaView.php';
require_once 'Model/concesionaria_Autos_Model.php';
require_once 'Controller/Controller.php';


class LogInController extends Controller {

  public function verify(){
    $mail = $_POST['email_Iniciar_Sesion'];
    $password = $_POST['contrasenia_Iniciar_Sesion'];
    $model = new PaginaModel();
    $usuario = $model-> getUsers($mail);

    if(count($usuario) == 1){
      if (password_verify($password, $usuario->contrasenia)) {
        session_start();
        $_SESSION['USERNAME'] = $usuario->nombre;
        header('Location: admin');
        die();
      }
    }

  }

  public function logOut(){
    session_start();
    session_destroy();
    header('Location: ' .LOOGIN);
    die();
  }

}
