<div class="row tituloCategoria">
  <div class="col-md-10">
    <h2 class="font-weight-light">{$vehiculo->modelo}</h2>
  </div>
  <div class="col-md-2">
    <button class="btn btn-light cerrar_Modal_Detalle_{$vehiculo->id_vehiculo}"  type="button" name="button">X</button>
  </div>
  <div class="col-md-4">
    <p>{$vehiculo->descripcion}</p>
  </div>
  <div class="col-md-2">
    <p>Modelo: {$vehiculo->anio}</p>
  </div>
  <div class="col-md-2">
    <p>Km: {$vehiculo->kilometros}</p>
  </div>
  <div class="col-md-2">
    <p>Valor: ${$vehiculo->precio}</p>
  </div>
</div>
