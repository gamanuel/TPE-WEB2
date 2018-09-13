<?php
  require_once 'Views/paginaView.php';
  require_once 'Model/concesionaria_Autos_Model.php';

  class paginaController {

    public function showCategories() {
      $categoriaModel = new CategoriaModel();
      $baseDeDatosCat = $categoriaModel->getCategories();
      $view = new ProgramaView();
      $view->mostrarCategorias($baseDeDatosCat);
    }

    public function showVehicles() {
      $categoriaModel = new CategoriaModel();
      $baseDeDatosAut = $categoriaModel->getVehicles();
      $view = new ProgramaView();
      $view->mostrarVehiculo($baseDeDatosAut);
    }

    public function showUsers(){
      $usersModel = new CategoriaModel();
      $baseDeDatosUser = $categoriaModel->getUsers();
      $view = new ProgramaView();
      $view->mostrarUsuario($baseDeDatosUser);
    }

   public function postLogin($usuario,$contraseña) {

     $email_Login = $_POST["email_Iniciar_Sesion"];
     $contraseña_Login = $_POST["contraseña_Iniciar_Sesion"];
     $loginModel = new CategoriaModel();
     $loginModel->getUsers();
//     if(($email_Login) == ($loginModel->mail)) {
//       if (($contraseña_Login) == ($loginModel->contraseña) ) {
        $view  = new ProgramaView();
        $view->mostrarAdmin();
  //     }
  ///   }
    // else {
    //   header("Location: ver");
  //   }

   }



  }





?>