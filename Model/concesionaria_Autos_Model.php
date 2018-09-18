<?php
class PaginaModel {

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

  public function getDetailVehicle($id){
    $sentencia = $this->conectarBaseDeDatos->prepare("select * from vehiculo WHERE id_vehiculo = '$id'");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
  }

  public function getUsers($mail,$password){
    $sentencia = $this->conectarBaseDeDatos->prepare("select * from usuarios WHERE mail = '$mail' and password = '$password'");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
  }

  public function getTabla($laTabla){
    $sentencia = $this->conectarBaseDeDatos->prepare("select * from $laTabla");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
  }

  public function guardarVehiculo($categoria,$modelo,$descripcion,$año,$kilometros,$precio){
    $sentencia = $this->conectarBaseDeDatos->prepare("INSERT INTO vehiculo(modelo,descripcion,anio,kilometros,precio,id_categoria) VALUES(?,?,?,?,?,?)");
    $sentencia->execute(array($modelo,$descripcion,$año,$kilometros,$precio,$categoria));

  }

}


?>
