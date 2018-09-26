{include file = 'header.tpl'}

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
          <a href="categoria/{$categoria->id_categoria}"><img class="Imagen_Auto" src="images/{$categoria->id_categoria}.jpg" alt=""></a>
            <h2 class="font-weight-light tituloCategoria">{$categoria->Nombre}</h2>
        </div>
        {/foreach}
      </div>

    </div>
    <div class="Nosotros" id="id_Nosotros">
      <div class="nosotros_fondo">
        <div class="container-fluid row">
          <div class="texto_Nosotros col-md-6 mx-auto mt-5">
            <h1 class="font-weight-normal tituloCategoria">Acerca de Nosotros</h1>
            <p class="font-weight-light">Es una empresa líder en el mercado automotor que ofrece venta de automotores multimarca usados seleccionados cuidadosamente y verificados en tu totalidad, así como también ofrece un servicio integral de diagnóstico, reparación y mantenimiento
              de tu vehículo. Para ello contamos con un concesionario de 2500m² de atención personalizada y con un taller especializado de 950m² y profesionales especialmente capacitados para la atención de los mismos. Tenemos un stock permanente de 300
              unidades, y tomamos tu usado al mejor precio para la compra de su nuevo vehículo. Contamos con financiación de las principales entidades bancarias lo que nos permite ofrecer hasta un 80% del valor de la unidad. Nuestro plantel de profesionales
              tanto en el área de ventas, administración, gestoría y servicio postventa le permitirán conseguir exactamente el vehículo que busca con facilidad y comodidad adaptándonos a sus necesidades.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="Contacto" id="id_Contacto">
      <div class="container-fluid">
        <h1 class="font-weight-normal tituloCategoria mt-4 mb-4">Contacto</h1>

        <div class="headerContacto">
          <div class="container-fluid row contenedorContactoInfo">
            <div class="paginaContactoHeader col-md-4">
              <i class="material-icons md-48">place</i>
              <h2>Direccion</h2>
              <p class="fuenteContactoInformacion">San Carlos de Bolivar, Buenos Aires</p>
              <p>Av. Almte Brown 578 - Av. Lavalle</p>
              <p class="fuenteContactoInformacion">Las Flores, Buenos Aires</p>
              <p>Av. Rivadavia 513</p>
            </div>

            <div class="paginaContactoHeader col-md-4">
              <i class="material-icons md-48">phone</i>
              <h2>Telefono</h2>
              <p class="fuenteContactoInformacion">San Carlos de Bolivar, Buenos Aires</p>
              <p>02244 45-1666</p>
              <p class="fuenteContactoInformacion">Las Flores, Buenos Aires</p>
              <p>02244 45-1666</p>
              </div>

            <div class="paginaContactoHeader col-md-4">
              <i class="material-icons md-48">message</i>
              <h2>Email</h2>
              <p class="fuenteContactoInformacion">San Carlos de Bolivar, Buenos Aires</p>
              <p>02244 45-1666</p>
              <p class="fuenteContactoInformacion">Las Flores, Buenos Aires</p>
              <p>02244 45-1666</p>  </div>
          </div>

          <div class="bodyContacto container-fluid  row ">
            <div class="divBodyContacto col-md-6">
              <h1>Envianos un Mensaje</h1>
              <p>Comentanos tu consulta</p>
              <a href="#">Preguntas Frecuentes</a>
            </div>

            <div class="formularioContacto  col-md-6">
              <form class="row">
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Ingrese su Nombre">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputPassword1">Apellido</label>
                  <input type="text" class="form-control" placeholder="Ingrese su Apellido">
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Correo</label>
                  <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Ingrese su Correo">
                  <small class="form-text text-muted">No compartiremos tu direccion de mail con nadie mas</small>
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleFormControlTextarea1">Comentario</label>
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-warning margenBotonEnviarFormulario">Enviar</button>
              </form>

            </div>
          </div>
        </div>
{include file = 'footer.tpl'}
