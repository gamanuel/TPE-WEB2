{include file = 'header.tpl'}

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
  <div class="col-md-6 mb-1 mt-1">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/3.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>

  <script src="js/jquery.js"></script>
  <script src="js/javaScript.js" charset="utf-8"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
