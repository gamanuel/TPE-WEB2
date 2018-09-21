<?php
  require_once 'Model/concesionaria_Autos_Model.php';
  require_once "libs/Smarty.class.php";

  class ProgramaView {

    private $basehref;

    public function __construct() {

       $this->basehref = '//'.$_SERVER['SERVER_NAME']
                  .dirname($_SERVER['PHP_SELF']).'/';
      }


    public function mostrarCategorias($baseDeDatosCat,$baseDeDatosAut) {
       $smarty = new Smarty();
       $smarty->assign('baseDeDatosCat',$baseDeDatosCat);
       $smarty->assign('baseDeDatosAut',$baseDeDatosAut);
       $smarty->assign('basehref',$this->basehref);
       $smarty->display('templates/index.tpl');
     }

   public function mostrarVehiculo($baseDeDatosAut){
       $smarty = new Smarty();
       $smarty->assign('baseDeDatosAut',$baseDeDatosAut);
       $smarty->assign('basehref',$this->basehref);
       //$smarty->display('templates/index.tpl');
   }

   public function mostrarAdmin(){
     $smarty = new Smarty();
     $smarty->assign('basehref',$this->basehref);
     $smarty->assign('username',$this->username);
     $smarty->display('templates/indexAdmin.tpl');
   }

   public function mostrarAgregarVehiculo($vehiculos,$categoria){
     $smarty = new Smarty();
     $smarty->assign('vehiculos',$vehiculos);
     $smarty->assign('categorias',$categoria);
     $smarty->assign('basehref',$this->basehref);
     $smarty->display('templates/agregarVehiculo.tpl');
   }

   public function mostrarDetalleVehiculo($modelo){
     $smarty = new Smarty();
     $smarty->assign('vehiculo',$modelo);
     $smarty->assign('basehref',$this->basehref);
     $smarty->display('templates/detail_vehiculo.tpl');
   }

   public function mostrarVehiculos($id){
     $smarty = new Smarty();
     $smarty->assign('vehiculos',$id);
     $smarty->assign('basehref',$this->basehref);
     $smarty->display('templates/show_vehiculo_cat.tpl');
   }

   public function mostrarLogIn(){
     $smarty = new Smarty();
     $smarty->assign('basehref',$this->basehref);
     $smarty->display('templates/show_logIn.tpl');
   }

}

?>
