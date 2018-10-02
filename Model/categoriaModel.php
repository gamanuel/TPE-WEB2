<?php

require_once 'Model/model.php';

class categoriaModel extends Model {

  function __construct(){
    parent::__construct();
  }

  public function getCategories(){
    $sentencia = $this->conectarBaseDeDatos->prepare("SELECT * FROM categoria ORDER BY Nombre");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
  }

  public function getDetailCategorie_byid($id){
    $sentencia = $this->conectarBaseDeDatos->prepare("SELECT * FROM categoria WHERE id_categoria = ?");
    $sentencia->execute(array($id));
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

  public function deleteCategorie($id){
    $sentencia = $this->conectarBaseDeDatos->prepare("DELETE FROM categoria WHERE id_categoria =?");
    $sentencia->execute(array($id));
  }

}


?>
