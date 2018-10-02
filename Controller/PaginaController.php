<?php
  require_once 'Views/UsuarioView.php';
  require_once 'Model/userModel.php';
  require_once 'Model/categoriaModel.php';
  require_once 'Model/vehiculoModel.php';
  require_once 'Controller/Controller.php';

  class PaginaController extends Controller{

    public function __construct(){
      parent::__construct();
      $this->view = new UsuarioView();
      $this->modelUser = new userModel();
      $this->modelCategoria = new categoriaModel();
      $this->modelVehiculo = new vehiculoModel();
    }

    public function showCategories() {
      $baseDeDatosCat = $this->modelCategoria->getCategories();
      $baseDeDatosAut = $this->modelVehiculo->getVehicles();
      $this->view->mostrarCategorias($baseDeDatosCat, $baseDeDatosAut);
    }

    public function showVehicles() {
      $baseDeDatosAut = $this->modelVehiculo->getVehicles();
      $this->view->mostrarVehiculo($baseDeDatosAut);
    }

    public function getDetailVehicle($modelo){
      $vehiculoID = $this->modelVehiculo->getDetailVehicle($modelo);
      $this->view->mostrarDetalleVehiculo($vehiculoID);
    }

    public function getVehicles($id){
      $vehiculos = $this->modelVehiculo->getVehicle($id);
      $this->view->mostrarVehiculos($vehiculos);
    }

    public function getLogin(){
      $this->view->mostrarLogIn();
    }

  }

