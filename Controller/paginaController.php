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
  }





?>
