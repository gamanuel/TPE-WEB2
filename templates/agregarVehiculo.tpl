{include file = 'headerAdmin.tpl'}

<div class="">
  <h1>Agregar vehiculo</h1>
  <form class="" action="guardarVehiculo" method="POST">
    <select class="" name="vehiculo_Categoria">
      <option value="">Categoria</option>
      <option value="1">Autos</option>
      <option value="2">SUVS</option>
    </select>
    <input type="text" name="vehiculo_Modelo" value="" placeholder="Modelo">
    <input type="text" name="vehiculo_Descripcion" value="" placeholder="Descripcion">
    <input type="number" name="vehiculo_Anio" value="" placeholder="Año">
    <input type="number" name="vehiculo_Kilometros" value="" placeholder="Kilometros">
    <input type="number" name="vehiculo_Precio" value="" placeholder="Precio $0.00">
    <button type="submit" name="button">Guardar</button>
  </form>
</div>
