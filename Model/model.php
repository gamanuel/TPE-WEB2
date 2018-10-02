<?php
include_once "Model/modelDatos.php";
define('HOST',$db_host);
define('BASE',$db_base);
define('USER',$db_user);
define('PASS',$db_pass);

class Model {

  protected $conectarBaseDeDatos;

  function __construct(){
    $this->conectarBaseDeDatos = new PDO('mysql:host='.HOST.';dbname='.BASE.';charset=utf8',USER,PASS);
  }
}
