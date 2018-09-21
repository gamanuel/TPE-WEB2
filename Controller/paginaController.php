<?php
  require_once 'Views/paginaView.php';
  require_once 'Model/concesionaria_Autos_Model.php';
  require_once 'Controller/SecuredController.php';


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

    public function showAddVehicle() {
      $categoriaModel = new PaginaModel();
      $baseDeDatosCat = $categoriaModel->getTabla("categoria");
      $baseDeDatosAut = $categoriaModel->getVehicles();
      $view = new ProgramaView();
      $view->mostrarAgregarVehiculo($baseDeDatosAut,$baseDeDatosCat);
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

    public function showDetailVehicle($id){
      $vehiculo = new PaginaModel();
      $vehiculoID = $vehiculo->getDetailVehicle($id);
      $view = new ProgramaView();
      $view->mostrarDetalleVehiculo($vehiculoID[0]);
    }

    public function showAdmin(){
        $view = new ProgramaView();
        $view-> mostrarAdmin();

    }

    public function getVehicles($id){
      $vehiculo_Categoria = new PaginaModel();
      $vehiculos = $vehiculo_Categoria->getVehicle($id);
      $view = new ProgramaView();
      $view->mostrarVehiculos($vehiculos);
    }





  }





?>
