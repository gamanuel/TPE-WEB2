{include file = 'header.tpl'}

  <div class="container-fluid">
    <div class="row">
      <div class="tituloCategoria col-md-12">
      <h1 class="font-weight-light">{$vehiculo->Nombre} - {$vehiculo->modelo}</h1>
      </div>
      <div class="col-md-6">
        <div class="row mt-1">
          <div class="input-group-prepend col-md-3 ">
            <span class="input-group-text col-md-12" id="inputGroup-sizing-default">Modelo</span>
          </div>
          <input type="text" class="form-control col-md-9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="vehiculo_Modelo" value="{$vehiculo->modelo}" disabled>
        </div>
        <div class="row mt-1">
          <div class="input-group-prepend col-md-3">
            <span class="input-group-text col-md-12" id="inputGroup-sizing-default">Descripcion</span>
          </div>
          <input type="text" class="form-control col-md-9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="vehiculo_Descripcion" value="{$vehiculo->descripcion}" disabled>
        </div>
        <div class="row mt-1">
          <div class="input-group-prepend col-md-3">
            <span class="input-group-text col-md-12" id="inputGroup-sizing-default">Año</span>
          </div>
          <input type="text" class="form-control col-md-9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="vehiculo_Anio" value="{$vehiculo->anio}" disabled>
        </div>
        <div class="row mt-1">
          <div class="input-group-prepend col-md-3">
            <span class="input-group-text col-md-12" id="inputGroup-sizing-default">Kilometros</span>
          </div>
          <input type="text" class="form-control col-md-9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="vehiculo_Kilometros" value="{$vehiculo->kilometros}" disabled>
        </div>
        <div class="row mt-1">
          <div class="input-group-prepend col-md-3">
            <span class="input-group-text col-md-12" id="inputGroup-sizing-default">Precio</span>
          </div>
          <input type="text" class="form-control col-md-9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="vehiculo_Precio" value="${$vehiculo->precio}" disabled>
        </div>
      </div>
    </div>


  </div>


  <script src="js/jquery.js"></script>
  <script src="js/javaScript.js" charset="utf-8"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
