<?php
  require_once 'Views/paginaView.php';
  require_once 'Views/adminView.php';
  require_once 'Model/paginaModel.php';
  require_once 'Controller/Controller.php';

  class paginaController extends Controller{

    public function __construct(){
      parent::__construct();
      $this->view = new ProgramaView();
      $this->model = new PaginaModel();
    }

    public function showCategories() {
      $baseDeDatosCat = $this->model->getTabla("categoria");
      $baseDeDatosAut = $this->model->getVehicles();
      $this->view->mostrarCategorias($baseDeDatosCat, $baseDeDatosAut);
    }

    public function showVehicles() {
      $baseDeDatosAut = $this->model->getVehicles();
      $this->view->mostrarVehiculo($baseDeDatosAut);
    }

    public function getDetailVehicle($modelo){
      $vehiculoID = $this->model->getDetailVehicle($modelo);
      $this->view->mostrarDetalleVehiculo($vehiculoID);
    }

    public function getVehicles($id){
      $vehiculos = $this->model->getVehicle($id);
      $this->view->mostrarVehiculos($vehiculos);
    }

    public function getLogin(){
      $this->view->mostrarLogIn();
    }

  }
