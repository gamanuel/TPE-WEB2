<?php

require_once 'Model/model.php';

class PaginaModel extends Model {

  private $conectarBaseDeDatos;

  function __construct(){
    parent::__construct();
  }

  //devuelve los registros de la tabla por filtro y orden
  public function getRegistrosTabla($la_tabla,$el_filtro,$el_orden){
    try {
      if(isset($el_filtro)){
          $el_filtro = "WHERE $el_filtro";
      }
      if(isset($el_orden)){
          $el_orden = "ORDER BY $el_orden";
      }
      $sentencia = $this->conectarBaseDeDatos->prepare("SELECT * from $la_tabla $el_filtro $el_orden");
      $sentencia->execute(array($la_tabla,$el_filtro,$el_orden));

      return $sentencia->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
      //crear base de datos
      echo "error base";
      print "¡Error!: " . $e->getMessage() . "<br/>";
    } catch (Exception $e) {
      echo "error base";
      print "¡Error!: " . $e->getMessage() . "<br/>";
    }
    finally{
      //$this->conectarBaseDeDatos->closeCursor();
      //$this->conectarBaseDeDatos = null;
    }
  }

  //devuelve un registro segun filtro
  public function getRegistro($la_tabla,$el_filtro){
    if(isset($el_filtro)){
        $el_filtro = "WHERE $el_filtro";
    }
    $sentencia = $this->conectarBaseDeDatos->prepare("SELECT * from $la_tabla $el_filtro");
    $sentencia->execute(array($la_tabla,$el_filtro));
    return $sentencia->fetch(PDO::FETCH_OBJ);
  }

  //delete
  public function deleteRegistroID($la_tabla,$el_id){
    $sentencia = $this->conectarBaseDeDatos->prepare("DELETE from $la_tabla WHERE id_$la_tabla = $el_id");
    $sentencia->bindParam(':tabla', $la_tabla, PDO::PARAM_STR);
    $sentencia->bindParam(':tabla2', $la_tabla, PDO::PARAM_STR);
    $sentencia->bindParam(':id', $el_id, PDO::PARAM_INT);
    $sentencia->execute();
  }

  //delete
  public function deleteRegistroID_NEW($la_tabla,$el_id){
    $sentencia = $this->conectarBaseDeDatos->prepare("DELETE from :tabla WHERE id_:tabla2 = :id");
    $sentencia->bindParam(':tabla', $la_tabla, PDO::PARAM_STR);
    $sentencia->bindParam(':tabla2', $la_tabla, PDO::PARAM_STR);
    $sentencia->bindParam(':id', $el_id, PDO::PARAM_INT);
    $sentencia->execute();
  }

  //sql Varios
  public function sqlVarios($el_sql){
    $sentencia = $this->conectarBaseDeDatos->prepare($el_sql);
    $sentencia->execute();
  }

  //sql Varios con return
  public function sqlVariosReturn($el_sql){
    $sentencia = $this->conectarBaseDeDatos->prepare($el_sql);
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
  }

}


?>