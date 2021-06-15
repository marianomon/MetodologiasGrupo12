{include file="header.tpl"}
{include file="navAdmin.tpl"}
 <table class="table table-hover table-bordered tabla">
      <thead class="thead-dark">
          <tr>
            <th scope="col">id_pedido</th>
            <th scope="col">id_usuario</th>
            <th scope="col">volumen</th>
          </tr> 
        </thead>
        <tbody class="contenedor-tabla nolink" >
          {foreach from=$list_Pedidos item=pedidos}
            <tr>
              <td scope="col">{$pedidos->id_pedido}</td>
              <td scope="col">{$pedidos->apellidoCiud}</th>
              <td scope="col">{$pedidos->volumen}</td>
           {/foreach}
           </tr>
      </tbody>
    </table>
  </div>
{include file="footer.tpl"}