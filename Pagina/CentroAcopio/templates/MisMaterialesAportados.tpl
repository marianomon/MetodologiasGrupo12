{include file="header.tpl"}
{include file="navBalanza.tpl"}
<div class="container-xxl materialesAdmin">
  <h2 class="titTabla">Materiales Aportados</h2>
  <table class="table table-dark table-striped tablaMateriales">
  <thead>
    <tr>
      <th scope="col">Material</th>
      <th scope="col">Kg Aportados</th>
    </tr>
  </thead>
  <tbody>
  
  {foreach from=$materiales item=Material name='foo'}
    <tr>
     <td>{$Material['nombre']}</td>
     {assign var='sum' value='0'}
            {foreach from=$materialesAport item=MaterialesAport}
                {if $Material['id_material'] == $MaterialesAport['idMaterial']}
                    
                     {assign var='sum' value=$sum+$MaterialesAport['cantidad']}
                    
                {/if}
            {/foreach}
            <td>{$sum}</td>
    </tr>
    {/foreach}
  </tbody>
</table>


{include file="footer.tpl"}