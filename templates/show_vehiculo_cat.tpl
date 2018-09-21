{include file = 'header.tpl'}

  <div class="container-fluid row mt-2">
    {foreach from=$vehiculos item=vehiculo}
    <div class="col-md-4 hover_div_categoria">
      <a href=""><img class="Imagen_Auto" src="images/{$vehiculo->id_categoria}.jpg" alt=""></a>
      <h2 class="font-weight-light tituloCategoria">{$vehiculo->modelo}</h2>
    </div>
    {/foreach}
  </div>
      <script src="js/jquery.js"></script>
        <script src="js/javaScript.js" charset="utf-8"></script>
        <script src="js/bootstrap.min.js"></script>
  </body>

</html>
