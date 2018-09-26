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
  <h1 class="font-weight-light tituloCategoria">Editar Categoria - {$categoria->Nombre}</h1>
<div class="row">
  <form class="col-md-6" action="confirmarEditarCategoria" method="POST">
    <input type="text" name="categoria_id" value="{$categoria->id_categoria}" hidden>
    <div class="row mt-1">
      <div class="input-group-prepend col-md-3 ">
        <span class="input-group-text col-md-12" id="inputGroup-sizing-default">Categoria</span>
      </div>
      <input type="text" name="nombre_Categoria" class="form-control col-md-9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="{$categoria->Nombre}" required>
    </div>
      <button class=" col-md-6 btn btn-success btn-large mt-1" type="submit" name="button">Editar</button>
      <a href="abmCategoria"><button class=" col-md-5 btn btn-primary btn-large mt-1" type="button">Cancelar</button></a>
  </form>
  <div class="col-md-6">
    <div class="container kv-main">
        <div class="page-header">
            <h1>Subir archivos
                <small><a href="https://github.com/kartik-v/bootstrap-fileinput-samples"><i
                        class="glyphicon glyphicon-download"></i> </a></small>
            </h1>
        </div>
        <div class="file-loading">
            <input id="archivos" name="archivos[]" type="file" multiple=true class="file-loading" >
        </div>

    </div>
  </div>
</div>
</div>

<!-- Modal -->
{include file = 'footer.tpl'}
