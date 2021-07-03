 <section class="clean-block features dark">
            <div class="container-xxl">
  <h2 class="titTabla">Ofertas para retirar materiales de ciudadanos por ciudadanos</h2>
  <table class="table table-dark table-striped tablaMateriales">
  <thead>
    <tr>
      <th scope="col">Zona geografica</th>
      <th scope="col">Espacio</th>
      <th scope="col">Texto libre</th>
      <th scope="col"colspan="2">Opciones</th>
    </tr>
  </thead>
  <tbody>
  {foreach from=$ofertas item=oferta}
    <tr>
            <td>{$oferta['zonaGeografica']}</td>
            <td>{$oferta['espacio']}</td>
            <td>{$oferta['texto']}</td>
            <td><a class = "btn btn-outline-danger" href="Login">Ver</a></td>      
    </tr>
    {/foreach}
  </tbody>  
</table>
    </section>