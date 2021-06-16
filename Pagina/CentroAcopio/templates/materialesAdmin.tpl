{include file="header.tpl"}
{include file="navAdmin.tpl"}
<div class="container-xxl materialesAdmin">
  <h2 class="titTabla">Materiales acetados</h2>
  <table class="table table-dark table-striped tablaMateriales">
  <thead>
    <tr>
      <th scope="col">Material</th>
      <th scope="col">descripcion</th>
      <th scope="col" colspan="2">Opciones</th>
    </tr>
  </thead>
  <tbody>
  {foreach from=$materiales item=Material}
    <tr>
            <td>{$Material['nombre']}</td>
            <td>{$Material['descripcion']}</td>
            <td><a class = "btn btn-outline-danger" href="borrarMaterial/{$Material['id_material']}" id="{$Material['id_material']}">Borrar</a></td>
            <td><button type="button" class="btn btn-outline-light editar" id="btn-editar" value={$Material['id_material']} >Editar</button></td>
    </tr>
    {/foreach}
  </tbody>
</table>
<div class="overlay" id="overlay">
  <div class="popup" id="popup">
    <a href="#" class="btn-cerrar-popup"id="btn-cerrar-popup"><i class="bi bi-x-circle"></i></a>
    <h2>Editar material</h2>
    <form action="editarMaterial" method="POST">
      <div class="contenedor-inputs">
        <input type="text" class="form-control" name="nombreMaterial" placeholder="Nombre material">
        <input type="text" class="form-control" name="descripcionMaterial" rows="3" placeholder="Descripcion">
        <input type="number" class="form-control idMaterial" name="idMaterial" >
        <button type="submit" class="btn btn-success mb-3">Editar datos</button>
      </div>
    </form>
  </div>
</div>


<div class="agregarMateriales">
    <h2>Agregar material</h2>
    <form action="agregarMaterial" method="post">
      <div class="contenedor-inputs">
        <input type="text" class="form-control nombreMaterialAgregar" name="nombreMaterialAgregar" placeholder="Nombre material">
        <input type="text" class="form-control descripcionAgregar" name="descripcionAgregar" rows="3" placeholder="Descripcion">
        <button type="submit" class="btn btn-success mb-3">Agregar</button>
      </div>
    </form>
  </div>

{include file="footer.tpl"}