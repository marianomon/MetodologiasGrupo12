{include file="header.tpl"}
{include file="navAdmin.tpl"}

<div class="container-xxl materialesAdmin">
  <h2 class="titTabla">Pedidos de retiro</h2>
  <table class="table table-dark table-striped tablaMateriales">
  <thead>
    <tr>
      <th scope="col">Numero de pedido</th>
      <th scope="col">Nombre usuario</th>
      <th scope="col">volumen</th>
    </tr>
  </thead>
  <tbody>
  {foreach from=$list_Pedidos item=pedidos}
            <tr>
              <td scope="col">{$pedidos->id_pedido}</td>
              <td scope="col">{$pedidos->apellidoCiud}</th>
              <td scope="col">{$pedidos->volumen}</td>
            </tr>
  {/foreach}         
  </tbody>
</table>
{include file="footer.tpl"}