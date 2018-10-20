{include file = 'headerAdmin.tpl'}

<head>
    <meta charset="UTF-8"/>
    <link href="kk/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="kk/themes/explorer-fa/theme.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="kk/js/plugins/sortable.js" type="text/javascript"></script>
    <script src="kk/js/fileinput.min.js" type="text/javascript"></script>
    <script src="kk/js/locales/es.js" type="text/javascript"></script>
    <script src="kk/themes/explorer-fa/theme.js" type="text/javascript"></script>
    <script src="kk/themes/fa/theme.js" type="text/javascript"></script>

</head>


<div class="container-fluid">
  <h1 class="font-weight-light tituloCategoria">Editar vehiculo - {$vehiculo->modelo}</h1>
<div class="row">
  <form class="col-md-6" action="confirmarEditarVehiculo" method="POST">
    <input type="text" name="vehiculo_id" value="{$vehiculo->id_vehiculo}" hidden>
    <div class="row mt-1">
      <div class="input-group-prepend col-md-3">
        <span class="input-group-text col-md-12" id="inputGroup-sizing-default">Categoria</span>
      </div>
      <select class="form-control col-md-9" name="vehiculo_Categoria">
        <option value="-1">Categoria</option>
        {foreach from=$categorias item=categoria}
        {if $categoria->id_categoria == $vehiculo->id_categoria}
        <option value="{$categoria->id_categoria}" selected>{$categoria->Nombre}</option>
        {else}
        <option value="{$categoria->id_categoria}">{$categoria->Nombre}</option>
        {/if}
        {/foreach}
      </select>
    </div>
    <div class="row mt-1">
      <div class="input-group-prepend col-md-3 ">
        <span class="input-group-text col-md-12" id="inputGroup-sizing-default">Modelo</span>
      </div>
      <input type="text" class="form-control col-md-9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="vehiculo_Modelo" value="{$vehiculo->modelo}">
    </div>
    <div class="row mt-1">
      <div class="input-group-prepend col-md-3">
        <span class="input-group-text col-md-12" id="inputGroup-sizing-default">Descripcion</span>
      </div>
      <input type="text" class="form-control col-md-9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="vehiculo_Descripcion" value="{$vehiculo->descripcion}">
    </div>
    <div class="row mt-1">
      <div class="input-group-prepend col-md-3">
        <span class="input-group-text col-md-12" id="inputGroup-sizing-default">Año</span>
      </div>
      <input type="text" class="form-control col-md-9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="vehiculo_Anio" value="{$vehiculo->anio}">
    </div>
    <div class="row mt-1">
      <div class="input-group-prepend col-md-3">
        <span class="input-group-text col-md-12" id="inputGroup-sizing-default">Kilometros</span>
      </div>
      <input type="text" class="form-control col-md-9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="vehiculo_Kilometros" value="{$vehiculo->kilometros}">
    </div>
    <div class="row mt-1">
      <div class="input-group-prepend col-md-3">
        <span class="input-group-text col-md-12" id="inputGroup-sizing-default">Precio</span>
      </div>
      <input type="text" class="form-control col-md-9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="vehiculo_Precio" value="{$vehiculo->precio}">
    </div>
      <button class=" col-md-6 btn btn-success btn-large mt-1" type="submit" name="button">Editar</button>
      <a href="abmVehiculo"><button class=" col-md-5 btn btn-primary btn-large mt-1" type="button">Cancelar</button></a>
  </form>
 
</div>
</div>

<!-- Modal -->
{include file = 'footer.tpl'}
