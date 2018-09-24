{include file = 'header.tpl'}

<div class="">
  <div class="Nosotros" id="id_Nosotros">
    <div class="iniciarSesion_fondo">
      <div class="container-fluid row">
        <div class="texto_Nosotros col-md-6 mx-auto mt-5">
          <h1 class="font-weight-normal tituloCategoria">Iniciar Sesion </h1>
          <div class="col-md-12">
            <form class="col-md-12 mb-2" action="verificarAdmin" method="post">
              <p class="font-weight-light">Usuario/Mail</p>
              <input class="col-md-12" type="text" name="email_Iniciar_Sesion" value="">
              <p class="font-weight-light">Contraseña</p>
              <input class="col-md-12" type="password" name="contrasenia_Iniciar_Sesion" value="">
              <div class="mt-1">
                <button class="btn btn-warning" type="submit" name="button">Ingresar</button>
              </div>
            </form>
          </div>
          {if !empty($error) }
             <div class="alert alert-danger" role="alert">{$error}</div>
           {/if}

        </div>
      </div>
    </div>
  </div>
</div>

<script src="js/jquery.js"></script>
<script src="js/javaScript.js" charset="utf-8"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>
