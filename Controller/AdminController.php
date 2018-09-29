<?php

require_once 'Views/AdminView.php';
require_once 'Model/PaginaModel.php';
require_once  'Controller/Controller.php';
require_once  'Controller/SecuredController.php';

class adminController extends SecuredController {

  public function __construct() {
    parent::__construct();
    $this->model = new PaginaModel();
    $this->viewAdmin= new AdminView();
  }

  public function getAdmin(){
    $this->viewAdmin->mostrarAdmin();
  }


  public function getAdminVehiculos(){
    $baseDeDatosAut = $this->model->getVehicles();
    $baseDeDatosCat = $this->model->getCategories();
    $this->viewAdmin->mostrarAbmVehiculos($baseDeDatosAut,$baseDeDatosCat);
  }

  public function getAdminCategorias(){
    $baseDeDatosCat = $this->model->getCategories();
    $this->viewAdmin->mostrarAbmCategoria($baseDeDatosCat);

  }

  public function showPostVehicle(){
    $categoria = $_POST['vehiculo_Categoria'];
    $modelo = $_POST['vehiculo_Modelo'];
    $descripcion = $_POST['vehiculo_Descripcion'];
    $anio = $_POST['vehiculo_Anio'];
    $kilometros = $_POST['vehiculo_Kilometros'];
    $precio = $_POST['vehiculo_Precio'];
    $this->model-> guardarVehiculo($categoria,$modelo,$descripcion,$anio,$kilometros,$precio);
    header('Location: abmVehiculo');
    die();

  }

  public function deleteVehicles($id_delete){
    $this->model->deleteVehiculo($id_delete);
    header('Location:'.HOME.'abmVehiculo');
    die();

  }

  public function editVehicles($id_editar){
    $baseDeDatosCat = $this->model->getCategories();
    $editado = $this->model->getDetailVehicle_byid($id_editar);
    $this->viewAdmin->editarVehiculos($baseDeDatosCat,$editado);

  }


  public function confirmEditVehicles(){
    $id = $_POST['vehiculo_id'];
    $categoria = $_POST['vehiculo_Categoria'];
    $modelo = $_POST['vehiculo_Modelo'];
    $descripcion = $_POST['vehiculo_Descripcion'];
    $anio = $_POST['vehiculo_Anio'];
    $kilometros = $_POST['vehiculo_Kilometros'];
    $precio = $_POST['vehiculo_Precio'];
    $this->model-> confirmarEditarVehiculo($id,$categoria,$modelo,$descripcion,$anio,$kilometros,$precio);
    header('Location:'.HOME.'abmVehiculo');
    die();
  }

  public function editCategorie($id_Categoria){
    $baseDeDatosCat = $this->model->getDetailCategorie_byid($id_Categoria);
    $this->viewAdmin->editarCategoria($baseDeDatosCat);
  }

  public function confirmEditCategorie(){
    $categoria = $_POST['nombre_Categoria'];
    $id_categ = $_POST['categoria_id'];
    $this->model-> confirmarEditarCategoria($id_categ,$categoria);
    header('Location:'.HOME.'abmCategoria');
  }

  public function getCategorie(){
    $nombre = $_POST['categoria_Nombre'];
    $this->model->guardarCategoria($nombre);
    header('Location:'.HOME.'abmCategoria');
  }

}
?>
