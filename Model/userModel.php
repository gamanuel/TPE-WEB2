<?php

require_once 'Model/model.php';

class userModel extends Model {

  function __construct(){
    parent::__construct();
  }

  public function getUser($mail){
    $sentencia = $this->conectarBaseDeDatos->prepare("SELECT * FROM usuarios WHERE mail = ?");
    $sentencia->execute(array($mail));
    return $sentencia->fetch(PDO::FETCH_OBJ);
  }
}


?>
