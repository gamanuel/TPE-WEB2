<?php
  require_once 'Model/concesionaria_Autos_Model.php';
  require_once "libs/Smarty.class.php";
  class ProgramaView {

    private $basehref;

    public function __construct() {

       $this->basehref = '//'.$_SERVER['SERVER_NAME']
                  .dirname($_SERVER['PHP_SELF']).'/';
      }


    public function mostrarCategorias($baseDeDatosCat) {
       $smarty = new Smarty();
       $smarty->assign('baseDeDatosCat',$baseDeDatosCat);
       $smarty->assign('basehref',$this->basehref);
       $smarty->display('templates/index.tpl');
     }

   public function mostrarVehiculo($baseDeDatosAut){
       $smarty = new Smarty();
       $smarty->assign('baseDeDatosAut',$baseDeDatosAut);
       $smarty->assign('basehref',$this->basehref);
       $smarty->display('templates/index.tpl');
   }

   public function mostrarAdmin(){
     $smarty = new Smarty();
     $smarty->assign('basehref',$this->basehref);
     $smarty->display('templates/indexAdmin.tpl');
   }

}

?>
