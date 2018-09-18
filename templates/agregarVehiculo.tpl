{include file = 'headerAdmin.tpl'}

<div class="container-fluid">
  <h1 class="font-weight-light tituloCategoria">Agregar vehiculo</h1>
  <form class="row" action="guardarVehiculo" method="POST">
    <select class="form-control col-md-12 ml-1" name="vehiculo_Categoria">
      <option value="">Categoria</option>
      {foreach from=$categorias item=categoria}
        <option value="{$categoria->id_categoria}">{$categoria->Nombre}</option>
      {/foreach}
    </select>
    <input class="form-control col-md-2 mr-1 mt-1 ml-1" type="text" name="vehiculo_Modelo" value="" placeholder="Modelo">
    <input class="form-control col-md-2 mr-1 mt-1" type="text" name="vehiculo_Descripcion" value="" placeholder="Descripcion">
    <input class="form-control col-md-2 mr-1 mt-1" type="number" name="vehiculo_Anio" value="" placeholder="Año">
    <input class="form-control col-md-2 mr-1 mt-1" type="number" name="vehiculo_Kilometros" value="" placeholder="Kilometros">
    <input class="form-control col-md-2 mr-1 mt-1" type="number" name="vehiculo_Precio" value="" placeholder="Precio $0.00">
    <button class="btn btn-success btn-sm mt-1" type="submit" name="button">Guardar</button>
  </form>
</div>

  <div class="container-fluid row mt-2">
      <h1 class="font-weight-light tituloCategoria col-md-12 mb-2">Vehiculos</h1>
  {foreach from=$vehiculos item=vehiculo}
    <div class=" col-md-3">
      <div class="col-md-12 contenedorHover">
        <img class="imagen_vehiculo_hover" src="images/3.jpg" alt="">
        <div class="overlay">
          <div class="text ">
            <button class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg-{$veiculo->id_vehiculo}" type="button">Editar</button>
            <!-- Modal Editar Vehiculo Seleccionado -->
            <div class="modal fade bd-example-modal-lg-{$veiculo->id_vehiculo}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <h1>{$vehiculo->modelo}</h1>
                </div>
              </div>
            </div>
            <!-- Modal Editar Vehiculo Seleccionado -->

            <button class="btn btn-danger mt-2" type="button" name="button">Eliminar</button>
          </div>
        </div>
      </div>
      <h1 class="tituloCategoria font-weight-light">{$vehiculo->modelo}</h1>
    </div>
  {/foreach}
  </div>




</div>
