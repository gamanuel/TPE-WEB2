<?php
class PaginaModel {

  private $conectarBaseDeDatos;

  function __construct(){
    $this->conectarBaseDeDatos = new PDO('mysql:host=localhost;dbname=concesionaria_autos;charset=utf8','root','');
  }

  public function getCategories(){
    $sentencia = $this->conectarBaseDeDatos->prepare("SELECT * from categoria order by Nombre");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
  }

  public function getVehicles(){
    $sentencia = $this->conectarBaseDeDatos->prepare("SELECT * from vehiculo");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
  }

  public function getDetailVehicle($modelo){
    $sentencia = $this->conectarBaseDeDatos->prepare("SELECT * from vehiculo WHERE modelo = '$modelo'");
    $sentencia->execute();
    return $sentencia->fetch(PDO::FETCH_OBJ);
  }

  public function getDetailVehicle_byid($id){
    $sentencia = $this->conectarBaseDeDatos->prepare("SELECT * from vehiculo WHERE id_vehiculo = '$id'");
    $sentencia->execute();
    return $sentencia->fetch(PDO::FETCH_OBJ);
  }

  public function getVehicle($id){
    $sentencia = $this->conectarBaseDeDatos->prepare("SELECT * from vehiculo WHERE id_categoria = '$id'");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
  }

  public function getUser($mail){
    $sentencia = $this->conectarBaseDeDatos->prepare("SELECT * from usuarios WHERE mail = '$mail'");
    $sentencia->execute();
    return $sentencia->fetch(PDO::FETCH_OBJ);
  }

  public function getTabla($laTabla){
    $sentencia = $this->conectarBaseDeDatos->prepare("SELECT * from $laTabla");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
  }

  public function guardarVehiculo($categoria,$modelo,$descripcion,$año,$kilometros,$precio){
    $sentencia = $this->conectarBaseDeDatos->prepare("INSERT INTO vehiculo(modelo,descripcion,anio,kilometros,precio,id_categoria) VALUES(?,?,?,?,?,?)");
    $sentencia->execute(array($modelo,$descripcion,$año,$kilometros,$precio,$categoria));
    //$consulta = $this->conectarBaseDeDatos->prepare()
  }

  public function confirmarEditarVehiculo($id,$categoria,$modelo,$descripcion,$año,$kilometros,$precio){
    $sentencia = $this->conectarBaseDeDatos->prepare("UPDATE vehiculo SET modelo=?,descripcion=?,anio=?,kilometros=?,precio=?,id_categoria=? WHERE id_vehiculo=?");
    $sentencia->execute(array($modelo,$descripcion,$anio,$kilometros,$precio,$categoria,$id));

  }

  public function deleteVehiculo($id){
    $sentencia = $this->conectarBaseDeDatos->prepare("DELETE from vehiculo WHERE id_vehiculo = '$id'");
    $sentencia->execute();

  }

  public function getDetailCategorie_byid($id){
    $sentencia = $this->conectarBaseDeDatos->prepare("SELECT * from categoria WHERE id_categoria = '$id'");
    $sentencia->execute();
    return $sentencia->fetch(PDO::FETCH_OBJ);
  }

  public function confirmarEditarCategoria($id,$nombre_Categoria){
    $sentencia = $this->conectarBaseDeDatos->prepare("UPDATE categoria SET Nombre=? WHERE id_categoria =?");
    $sentencia->execute(array($nombre_Categoria,$id));
  }

  public function guardarCategoria($nombre){
    $sentencia = $this->conectarBaseDeDatos->prepare("INSERT INTO categoria (Nombre) VALUES(?)");
    $sentencia->execute(array($nombre));
  }

}


?>
