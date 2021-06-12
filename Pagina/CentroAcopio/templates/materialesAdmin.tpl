{include file="header.tpl"}
{include file="navAdmin.tpl"}

<h2 class="titTabla">Materiales acetados</h2>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Material</th>
      <th scope="col">descripcion</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  {foreach from=$materiales item=Material}
    <tr>
            <th scope="row">{$Material['id_material']}</th>
            <td>{$Material['nombre']}</td>
            <td>{$Material['descripcion']}</td>
            <td><button type="button" class="btn btn-outline-danger" id="borrar" value={$Material['id_material']}>Borrar</button></td>
    </tr>
    {/foreach}
  </tbody>
</table>
{include file="footer.tpl"}