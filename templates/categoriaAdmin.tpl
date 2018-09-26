{include file = 'headerAdmin.tpl'}

<div class="container-fluid">
  <div class="coontainer-fluid">
    <h1 class="font-weight-light tituloCategoria">Agregar Categoria</h1>
    <div class="container-fluid">
      <form class="row" action="guardarCategoria" method="POST">
        <input class="form-control col-md-10 mr-1" stype="text" name="categoria_Nombre" value="" placeholder="Categoria">
        <button class="btn btn-success btn-sm col-md-1" type="submit" name="button">Guardar</button>
      </form>
    </div>

    <div class="row">
      <h1 class="font-weight-light tituloCategoria col-md-12 mt-2">Categorias</h1>
      {foreach from=$categorias item=$categoria}
      <div class=" col-md-3">
        <div class="col-md-12 contenedorHover">
          <img class="imagen_vehiculo_hover" src="images/{$categoria->id_categoria}.jpg" alt="">
          <div class="overlay">
            <div class="text ">
              <a href="editarCategoria/{$categoria->id_categoria}"><button class="btn btn-success botonEditar" type="button">Editar</button></a>
              <button class="btn btn-danger mt-2 botonBorrar" type="button" name="{$vehiculo->id_vehiculo}" data-name="{$vehiculo->modelo}">Eliminar</button>
            </div>
          </div>
        </div>
        <h1 class="tituloCategoria font-weight-light">{$categoria->Nombre}</h1>
      </div>
      {/foreach}
    </div>
  </div>

  <div id="myModal" class="modal_Confirma_Cancela">

    <!-- Modal content -->
    <div class="modal_Confirma_Cancela_content">
      <span class="modal_Confirma_Cancela_close">&times;</span>
      <p>¿Esta Seguro de Eliminar <span id="que_borro"></span>?</p>
      <div class="">
        <a class="" href="" id="btn_Czonfirmar"><button class="btn btn-success" type="button">Confirmar</button></a>
        <a><button class="btn btn-primary botonBorrar modal_Confirma_Cancela_close" type="button">Cancelar</button></a>

      </div>
    </div>

  </div>


</div>


{include file = 'footer.tpl'}
