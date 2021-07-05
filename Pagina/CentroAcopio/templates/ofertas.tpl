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
            <input class="form-check-input" type="radio" name="espacio" checked="checked" id="inlineRadio1" value="1" >
            <label class="form-check-label" for="inlineRadio1">Una caja</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="espacio" id="inlineRadio2" value="2" >
            <label class="form-check-label" for="inlineRadio2">El baul de un auto</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="espacio" id="inlineRadio3" value="3" >
            <label class="form-check-label" for="inlineRadio3">Una caja de una camioneta</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="espacio" id="inlineRadio4" value="4" >
            <label class="form-check-label" for="inlineRadio4">Un camion</label>
          </div>
        </div>
        <button type="submit" class="btn btn-success mb-3">Agregar</button>
      </div>
    </form>
  </div>
  <div class="row justify-content-md-center">
    <div class="col-10 ">
      <h2 class="titTabla">Ofertas abiertas:</h2>
      <table class="table-dark table-striped tablaMateriales ofertasAbiertas">
        <tbody>
        <td>Zona</td>
        <td>Espacio</td>
        <td>Descripcion</td>
        <td>Postulacion</td>
          {foreach from=$ofertas item=oferta}
            {if $oferta['id_usuario'] neq $id}
              <form action="postular" method="post">
                <input type="number" class="form-control idMaterial" name="idOferta" value="{$oferta['id_oferta']}">
                <tr>
                  <td>{$oferta['zonaGeografica']}</td>
                  {if $oferta['espacio'] eq 1}
                      <td>Una caja</td>
                  {elseif $oferta['espacio'] eq 2}
                    <td>Baul en un auto</td>
                  {else if $oferta['espacio'] eq 3}
                    <td>La caja de una camioneta</td>
                  {else}
                    <td>Un camion</td>
                  {/if}
                    <td>{$oferta['texto']}</td>
                  <td><button class="btn btn-outline-danger" id="btn-postular" type="submit">Postularme</button></td>
                </tr>
              </form>
            {/if}
          {/foreach}
        </tbody>  
      </table>
    </div>
  </div>
  

{include file="footer.tpl"}