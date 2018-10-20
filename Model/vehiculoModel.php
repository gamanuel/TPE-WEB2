<?php

require_once 'Model/model.php';

class vehiculoModel extends Model {

  function __construct(){
    parent::__construct();
  }

  public function getVehicles(){
    $sentencia = $this->conectarBaseDeDatos->prepare("SELECT * FROM vehiculo");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
  }

  public function getDetailVehicle($modelo){
    $sentencia = $this->conectarBaseDeDatos->prepare("SELECT modelo,descripcion,anio,kilometros,precio,vehiculo.id_categoria,Nombre FROM vehiculo,categoria WHERE vehiculo.id_categoria = categoria.id_categoria AND modelo = '$modelo'");
    $sentencia->execute();
    return $sentencia->fetch(PDO::FETCH_OBJ);
  }

  public function getDetailVehicle_byid($id){
    $sentencia = $this->conectarBaseDeDatos->prepare("SELECT * FROM vehiculo WHERE  id_vehiculo = ?");
    $sentencia->execute(array($id));
    return $sentencia->fetch(PDO::FETCH_OBJ);
  }

  public function getVehicle($id){
    $sentencia = $this->conectarBaseDeDatos->prepare("SELECT * FROM vehiculo WHERE id_categoria = ?");
    $sentencia->execute(array($id));
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
  }

  public function guardarVehiculo($categoria,$modelo,$descripcion,$anio,$kilometros,$precio){
    $sentencia = $this->conectarBaseDeDatos->prepare("INSERT INTO vehiculo(modelo,descripcion,anio,kilometros,precio,id_categoria) VALUES(?,?,?,?,?,?)");
    $sentencia->execute(array($modelo,$descripcion,$anio,$kilometros,$precio,$categoria));
    //$consulta = $this->conectarBaseDeDatos->prepare()
  }

  public function confirmarEditarVehiculo($id,$categoria,$modelo,$descripcion,$anio,$kilometros,$precio){
    $sentencia = $this->conectarBaseDeDatos->prepare("UPDATE vehiculo SET modelo=?,descripcion=?,anio=?,kilometros=?,precio=?,id_categoria=? WHERE id_vehiculo=?");
    $sentencia->execute(array($modelo,$descripcion,$anio,$kilometros,$precio,$categoria,$id));

  }

  public function deleteVehiculo($id){
    $sentencia = $this->conectarBaseDeDatos->prepare("DELETE FROM vehiculo WHERE id_vehiculo = ?");
    $sentencia->execute(array($id));

  }

}


?>
