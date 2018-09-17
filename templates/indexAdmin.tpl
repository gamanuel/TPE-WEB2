<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <base href="{$basehref}" target="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <title>TPE</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">AUTOCAR  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Inventario <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="adminInventario.tpl">Agregar Producto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#id_Nosotros">Mensajes</a>
        </li>
      </ul>
      <label>Bienvenido  </label>
    </div>
  </nav>

  <div class="row">
    {foreach from=$baseDeDatosAut item=vehiculo}
      <div class="col-md-4 hover_div_categoria">
        <a href="categoria/{$categoria->id_clase}" id="boton_Categoria_Autos_{$categoria->id_clase}" data-toggle="modal" data-target=".bd-example-modal-lg-{$categoria->id_clase}"><img class="Imagen_Auto" src="images/autoImagen.jpg" alt=""></a>
        <h2 class="font-weight-light tituloCategoria">{$categoria->Nombre}</h2>
      </div>
    {/foreach}
  </div>







  <script src="../js/jquery.js"></script>
  <script src="../js/javaScript.js" charset="utf-8"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>

</html>
