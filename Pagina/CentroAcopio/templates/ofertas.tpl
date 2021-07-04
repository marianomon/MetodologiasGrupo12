{include file="header.tpl"}
{include file="navciudadano.tpl"}
<div class="container-xxl materialesAdmin">
<div class="agregarMateriales">
    <h2>Agregar oferta</h2>
    <form action="agregarOferta" method="post">
      <div class="contenedor-inputs">
        <input type="text" class="form-control nombreMaterialAgregar" name="zona" placeholder="Zona geografica">
        <input type="text" class="form-control descripcionAgregar" name="textoLibre" rows="3" placeholder="Texto libre">
        <div class="contenedorRadio">
          <h3>¿Cuanto espacio disponible tenes?</h3>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1" name="espacio">
            <label class="form-check-label" for="inlineRadio1">Una caja</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2" name="espacio">
            <label class="form-check-label" for="inlineRadio2">El baul de un auto</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="3" name="espacio">
            <label class="form-check-label" for="inlineRadio2">Una caja de una camioneta</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="4" name="espacio">
            <label class="form-check-label" for="inlineRadio2">Un camion</label>
          </div>
        </div>
        <button type="submit" class="btn btn-success mb-3">Agregar</button>
      </div>
    </form>
  </div>

{include file="footer.tpl"}