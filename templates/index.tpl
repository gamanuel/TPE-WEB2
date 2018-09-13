{include file="header.tpl"}
<div class="fondoInicio"></div>

<div class="Categoria container-fluid mb-4" id="id_Categoria">
  <div class="div_Categoria row mb-3 mt-2">
    <div class="col-md-12">
      <h1 class="tituloCategoria font-weight-normal">Categoria</h1>
    </div>
  </div>
  <div class="row">
    {foreach from=$baseDeDatosCat item=categoria}
    <div class="col-md-4 hover_div_categoria">
      <a href="#" id="boton_Categoria_Autos_{$categoria->id_clase}" data-toggle="modal" data-target=".bd-example-modal-lg-{$categoria->id_clase}"><img class="Imagen_Auto" src="images/autoImagen.jpg" alt=""></a>
      <h2 class="font-weight-light tituloCategoria">{$categoria->Nombre}</h2>
      <!--Ventana Modal Categoria Autos -->
      <div class="modal fade bd-example-modal-lg-{$categoria->id_clase}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <h1 class="tituloCategoria font-weight-normal">{$categoria->Nombre}</h1>
            <div class="container mt-2 row">
              {foreach from=$baseDeDatosAut item=vehiculo}
                  <div class="col-md-3 hover_div_categoria">
                    <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"><img class="Imagen_Auto" src="images/autoImagen.jpg" alt=""></a>
                    <h2 class="font-weight-light tituloCategoria">Autos</h2>
                  </div>
              {/foreach}
            </div>
          </div>
        </div>
      </div>
    </div>
    {/foreach}


  </div>
</div>
{include file="footer.tpl"}
