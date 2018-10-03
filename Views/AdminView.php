<?php
  require_once "Views/View.php";

  class AdminView extends View {

    private $mail;

    public function __construct() {
      parent::__construct();
      $this->mail = $_SESSION['MAIL'];
      $this->smarty->assign('username',$this->mail);
    }

    public function mostrarAdmin(){      
      $this->smarty->display('templates/indexAdmin.tpl');
    }

    public function mostrarAbmVehiculos($baseDeDatosAut,$baseDeDatosCat){      
      $this->smarty->assign('vehiculos',$baseDeDatosAut);
      $this->smarty->assign('categorias',$baseDeDatosCat);
      $this->smarty->display('templates/agregarVehiculo.tpl');
    }

    public function mostrarAbmCategoria($baseDeDatosCat){      
      $this->smarty->assign('categorias',$baseDeDatosCat);
      $this->smarty->display('templates/categoriaAdmin.tpl');
    }

    public function editarVehiculos($baseDeDatosCat,$editado){      
      $this->smarty->assign('categorias',$baseDeDatosCat);
      $this->smarty->assign('vehiculo',$editado);
      $this->smarty->display('templates/editarVehiculo.tpl');
    }

    public function editarCategoria($baseDeDatosCat){
      $this->smarty->assign('categoria',$baseDeDatosCat);
      $this->smarty->display('templates/editarCategoria.tpl');
    }
  }
 ?>
