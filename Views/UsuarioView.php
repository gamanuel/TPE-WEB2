<?php
  require_once "Views/View.php";

  class UsuarioView extends View {

    public function __construct() {
      parent::__construct();
    }

    public function mostrarCategorias($baseDeDatosCat,$baseDeDatosAut) {       
      $this->smarty->assign('baseDeDatosCat',$baseDeDatosCat);
      $this->smarty->assign('baseDeDatosAut',$baseDeDatosAut);       
      $this->smarty->display('templates/index.tpl');
    }

    public function mostrarVehiculo($baseDeDatosAut){       
      $this->smarty->assign('baseDeDatosAut',$baseDeDatosAut);       
    }

    public function mostrarAgregarVehiculo($vehiculos,$categoria){      
      $this->smarty->assign('vehiculos',$vehiculos);
      $this->smarty->assign('categorias',$categoria);      
      $this->smarty->display('templates/agregarVehiculo.tpl');
    }

    public function mostrarDetalleVehiculo($modelo){      
      $this->smarty->assign('vehiculo',$modelo);      
      $this->smarty->display('templates/detail_vehiculo.tpl');
    }

    public function mostrarVehiculos($id){      
      $this->smarty->assign('vehiculos',$id);      
      $this->smarty->display('templates/show_vehiculo_cat.tpl');
    }

    public function mostrarLogIn($error = ""){      
      $this->smarty->assign('error',$error);
      $this->smarty->display('templates/show_logIn.tpl');
    }
}
?>