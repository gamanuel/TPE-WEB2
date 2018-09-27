<?php

require_once 'Views/AdminView.php';
require_once 'Views/UsuarioView.php';
require_once 'Model/PaginaModel.php';
require_once  'Controller/Controller.php';

class LogInController extends Controller {

  public function __construct() {
    parent::__construct();
    $this->model = new PaginaModel();
    $this->viewAdmin= new AdminView();
    $this->view= new UsuarioView();
    //session_start();
  }


  public function verify(){
    $mail = $_POST['email_Iniciar_Sesion'];
    $password = $_POST['contrasenia_Iniciar_Sesion'];

    if(!empty($mail) && !empty($password)){
           $user = $this->model->getUser($mail);
           if((!empty($user)) && password_verify($password, $user->contrasenia)) {
               session_start();
               $_SESSION['MAIL'] = $mail;
               header("Location: admin");
               die();
           }
           else {
            $mostrarError = $this->view->mostrarLogIn("Usuario o contraseña incorrecta");
            die();
           }
       }
       else {
        $mostrarError = $this->view->mostrarLogIn("Usuario o contraseña incorrecta");
        die();
       }
  }

  public function verificarSesion(){
    if(!isset($_SESSION['MAIL'])){
      header('Location: ' .HOME);
      die();
    }
  }

  public function getAdmin(){
    $this->verificarSesion();
    $this->viewAdmin->mostrarAdmin();
  }

  public function logOut(){
    session_start();
    session_destroy();
    header('Location: ' .ver);
    die();
  }

  public function getAdminVehiculos(){
    $this->verificarSesion();
    $baseDeDatosAut = $this->model->getVehicles();
    $baseDeDatosCat = $this->model->getCategories();
    $this->viewAdmin->mostrarAbmVehiculos($baseDeDatosAut,$baseDeDatosCat);
  }

  public function getAdminCategorias(){
    $this->verificarSesion();
    $baseDeDatosCat = $this->model->getCategories();
    $this->viewAdmin->mostrarAbmCategoria($baseDeDatosCat);

  }

  public function showPostVehicle(){
    $this->verificarSesion();
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
    $this->verificarSesion();
    $this->model->deleteVehiculo($id_delete);
    header('Location:'.HOME.'abmVehiculo');
    die();

  }

  public function editVehicles($id_editar){
    $this->verificarSesion();
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
    $this->verificarSesion();
    $baseDeDatosCat = $this->model->getDetailCategorie_byid($id_Categoria);
    $this->viewAdmin->editarCategoria($baseDeDatosCat);
  }

  public function confirmEditCategorie(){
    $this->verificarSesion();
    $categoria = $_POST['nombre_Categoria'];
    $id_categ = $_POST['categoria_id'];
    $this->model-> confirmarEditarCategoria($id_categ,$categoria);
    header('Location:'.HOME.'abmCategoria');
  }

  public function getCategorie(){
    $this->verificarSesion();
    $nombre = $_POST['categoria_Nombre'];
    $this->model->guardarCategoria($nombre);
    header('Location:'.HOME.'abmCategoria');
  }


}
