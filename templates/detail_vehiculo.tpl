{include file = 'header.tpl'}

  <div class="container-fluid">
    <div class="row">
      <div class="tituloCategoria col-md-12">
      <h1 class="font-weight-light">{$vehiculo->modelo}</h1>
      </div>
      <div class="col-md-6 mt-1">
        <div class="col-md-12">
          <p>{$vehiculo->descripcion}</p>
        </div>
        <div class="col-md-12">
          <p>Modelo: {$vehiculo->anio}</p>
        </div>
        <div class="col-md-12">
          <p>Km: {$vehiculo->kilometros}</p>
        </div>
        <div class="col-md-12">
          <p>Valor: ${$vehiculo->precio}</p>
        </div>
      </div>


    </div>

  </div>


  <script src="js/jquery.js"></script>
  <script src="js/javaScript.js" charset="utf-8"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
