{include file="header.tpl"}
{include file="navAdmin.tpl"}
<div class="container-xxl materialesAdmin">
  <h2 class="titTabla">Cartoneros</h2>
  <table class="table table-dark table-striped tablaMateriales">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">DNI</th>
      <th scope="col">Fecha nacimiento</th>
        <th scope="col">Direccion</th>
      <th scope="col" colspan="2">Opciones</th>
    </tr>
  </thead>
  <tbody>
  {foreach from=$cartoneros item=cartonero}
    <tr>
            <td>{$cartonero['nombre']}</td>
            <td>{$cartonero['apellido']}</td>
            <td>{$cartonero['dni']}</td>
            <td>{$cartonero['fechaNacimiento']}</td>
            <td>{$cartonero['direccion']}</td>
            {if {$cartonero['activo']} == false}
                    <td><a class = "btn btn-success" href="aceptarUsuario/{$cartonero['id_usuario']}" id="{$cartonero['id_usuario']}">Aceptar</a></td>
                    <td><a class = "btn btn-outline-danger" href="borrarUsuario/{$cartonero['id_usuario']}" id="{$cartonero['id_usuario']}">Rechazar</a></td>
                  {else}
                    <td><a class = "btn btn-outline-danger" href="borrarUsuario/{$cartonero['id_usuario']}" id="{$cartonero['id_usuario']}">Borrar</a></td>
            <td><button type="button" class="btn btn-outline-light editar" id="btn-editar" value={{$cartonero['id_usuario']}} >Editar</button></td>
            {/if}
            
    </tr>
    {/foreach}
  </tbody>
</table>
<div class="overlay" id="overlay">
  <div class="popup formEditar" id="popup">
    <a href="#" class="btn-cerrar-popup"id="btn-cerrar-popup"><i class="bi bi-x-circle"></i></a>
    <h2>Editar datos cartonero</h2>
    <form action="editarUsuario" method="POST">
      <div class="contenedor-inputs">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
        <input type="text" class="form-control" name="apellido" placeholder="Apellido">
        <input type="password" id="password" name="password" placeholder="password"  />
        <input type="text" id="direccion" name="direccion" placeholder="Direccion"/>
        <input type="number" class="form-control idMaterial" name="idUsuario" >
        <button type="submit" class="btn btn-success mb-3">Editar datos</button>
      </div>
    </form>
  </div>
</div>


<section class="clean-block clean-form" id="formContainer"> 
                <form action="registrarseCartonero" method="post" id="formCartonero">
                    <div class="block-heading">
                        <h2 class="text-info">REGISTRAR CARTONERO</h2>
                    </div>
                    <div class="form-group"><label>Nombre</label><input class="form-control"  id="nombre" name="nombre" placeholder="nombre" type="text" /></div>
                    <div class="form-group"><label>Apellido</label><input  id="apellido" name="apellido" placeholder="apellido" class="form-control" type="text" /></div>
                    <div class="form-group"><label>Contraseña</label><input class="form-control" id="password" name="password" placeholder="Contraseña"  type="password"/></div>
                    <div class="form-group"><label>Dirección</label><input id="direccion" name="direccion" placeholder="direccion" class="form-control"/></div>
                    <div class="form-group"><label>DNI</label><input id="dni" name="dni" placeholder="DNI" class="form-control"/></div>
                    <input id="isAdm" value="-1" name="isAdm" class="form-control"/>
                    <input id="isAdm" value="1" name="active" class="form-control"/>
                    <div class="form-group"><p>Fecha de Nacimiento</p><input type="date" id="nacimiento" name="nacimiento"
                            value="2000-07-22"
                            min="1900-01-01" max="2002-01-01"></div>
                    <div class="form-group"><button class="btn btn-primary btn-block" value="registrarseCartonero " type="submit">Registrar cartonero</button></div>
                </form>
</section>


<script src="./js/main.js"></script>

{include file="footer.tpl"}