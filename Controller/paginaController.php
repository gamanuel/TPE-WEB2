<?php
  require_once 'Views/paginaView.php';
  require_once 'Views/adminView.php';
  require_once 'Model/concesionaria_Autos_Model.php';



  class paginaController{

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

    

    public function getDetailVehicle($modelo){
      $vehiculo = new PaginaModel();
      $vehiculoID = $vehiculo->getDetailVehicle($modelo);
      $view = new ProgramaView();
      $view->mostrarDetalleVehiculo($vehiculoID);
    }

    public function getVehicles($id){
      $vehiculo_Categoria = new PaginaModel();
      $vehiculos = $vehiculo_Categoria->getVehicle($id);
      $view = new ProgramaView();
      $view->mostrarVehiculos($vehiculos);
    }


  }





?>
