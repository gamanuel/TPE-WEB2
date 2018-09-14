<?php
class CategoriaModel {

  private $conectarBaseDeDatos;

  function __construct(){
    $this->conectarBaseDeDatos = new PDO('mysql:host=localhost;'.'dbname=concesionaria_autos;charset=utf8','root','');
  }

  public function getCategories(){
    $sentencia = $this->conectarBaseDeDatos->prepare("select * from categoria order by Nombre");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
  }

  public function getVehicles(){
    $sentencia = $this->conectarBaseDeDatos->prepare("select * from vehiculo");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
  }

  public function getUsers(){
    $sentencia = $this->conectarBaseDeDatos->prepare("select * from usuarios");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
  }



}


?>
