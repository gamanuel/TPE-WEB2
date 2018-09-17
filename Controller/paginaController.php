<?php
  require_once 'Views/paginaView.php';
  require_once 'Model/concesionaria_Autos_Model.php';

  class paginaController {

    public function showCategories() {
      $categoriaModel = new PaginaModel();
      $baseDeDatosCat = $categoriaModel->getTabla("categoria");
      $baseDeDatosAut = $categoriaModel->getVehicles();
      $view = new ProgramaView();
      $view->mostrarCategorias($baseDeDatosCat, $baseDeDatosAut);
    }

    public function showVehicles() {
      $categoriaModel = new PaginaModel();
      $baseDeDatosAut = $categoriaModel->getVehicles();
      $view = new ProgramaView();
      $view->mostrarVehiculo($baseDeDatosAut);
    }

    public function postLogin($mail,$password){
      $loginModel = new PaginaModel();
      $mail = $_POST['email_Iniciar_Sesion'];
      $password = $_POST['contraseña_Iniciar_Sesion'];
      $baseDeDatosUser = $loginModel->getUsers($mail,$password);
      if(count($baseDeDatosUser)==1){
        $view = new ProgramaView();
        $view->mostrarAdmin($baseDeDatosUser);
      }
    }



  }





?>
