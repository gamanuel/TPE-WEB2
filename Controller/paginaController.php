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

    public function postLogin(){
      $loginModel = new PaginaModel();
      $mail = $_POST['email_Iniciar_Sesion'];
      $password = $_POST['contrasenia_Iniciar_Sesion'];
      $baseDeDatosUser = $loginModel->getUsers($mail,$password);
      if(count($baseDeDatosUser)==1){
        $view = new ProgramaView();
        $view->mostrarAdmin($baseDeDatosUser);
      }
    }

    public function showAddVehicle() {
      $view = new ProgramaView();
      $view->mostrarAgregarVehiculo();
    }

    public function showPostVehicle(){
      $categoria = $_POST['vehiculo_Categoria'];
      $modelo = $_POST['vehiculo_Modelo'];
      $descripcion = $_POST['vehiculo_Descripcion'];
      $anio = $_POST['vehiculo_Anio'];
      $kilometros = $_POST['vehiculo_Kilometros'];
      $precio = $_POST['vehiculo_Precio'];
      $paginaModel = new PaginaModel();
      $paginaModel-> guardarVehiculo($categoria,$modelo,$descripcion,$anio,$kilometros,$precio);

    }



  }





?>
