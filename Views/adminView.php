<?php
  require_once 'Model/concesionaria_Autos_Model.php';
  require_once "libs/Smarty.class.php";

  class adminView {

    private $basehref;
    private $mail;

    public function __construct() {

       $this->basehref = '//'.$_SERVER['SERVER_NAME']
                  .dirname($_SERVER['PHP_SELF']).'/';
       $this->mail = $_SESSION['MAIL'];

    }

    public function mostrarAdmin(){
      $smarty = new Smarty();
      $smarty->assign('basehref',$this->basehref);
      $smarty->assign('username',$this->mail);
      $smarty->display('templates/indexAdmin.tpl');
    }

    public function mostrarAbmVehiculos($baseDeDatosAut,$baseDeDatosCat){
      $smarty = new Smarty();
      $smarty->assign('basehref',$this->basehref);
      $smarty->assign('vehiculos',$baseDeDatosAut);
      $smarty->assign('categorias',$baseDeDatosCat);
      $smarty->assign('username',$this->mail);
      $smarty->display('templates/agregarVehiculo.tpl');

    }

    public function mostrarAbmCategoria($baseDeDatosCat){
      $smarty = new Smarty();
      $smarty->assign('basehref',$this->basehref);
      $smarty->assign('categorias',$baseDeDatosCat);
      $smarty->assign('username',$this->mail);
      $smarty->display('templates/categoriaAdmin.tpl');

    }

    public function editarVehiculos($baseDeDatosCat,$editado){
      $smarty = new Smarty();
      $smarty->assign('basehref',$this->basehref);
      $smarty->assign('categorias',$baseDeDatosCat);
      $smarty->assign('username',$this->mail);
      $smarty->assign('vehiculo',$editado);
      $smarty->display('templates/editarVehiculo.tpl');

    }

  }

 ?>
