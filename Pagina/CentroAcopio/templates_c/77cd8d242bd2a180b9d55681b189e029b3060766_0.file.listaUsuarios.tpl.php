<?php
/* Smarty version 3.1.33, created on 2021-06-15 06:55:22
  from 'C:\xampp\htdocs\proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\listaUsuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60c832ba0ec7e3_95450997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77cd8d242bd2a180b9d55681b189e029b3060766' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\listaUsuarios.tpl',
      1 => 1623732873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60c832ba0ec7e3_95450997 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartoneros']->value, 'cartonero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cartonero']->value) {
?>
    <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['cartonero']->value['nombre'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['cartonero']->value['apellido'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['cartonero']->value['dni'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['cartonero']->value['fechaNacimiento'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['cartonero']->value['direccion'];?>
</td>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['cartonero']->value['activo'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == false) {?>
                    <td><a class = "btn btn-success" href="aceptarUsuario/<?php echo $_smarty_tpl->tpl_vars['cartonero']->value['id_usuario'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['cartonero']->value['id_usuario'];?>
">Aceptar</a></td>
                    <td><a class = "btn btn-outline-danger" href="borrarUsuario/<?php echo $_smarty_tpl->tpl_vars['cartonero']->value['id_usuario'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['cartonero']->value['id_usuario'];?>
">Rechazar</a></td>
                  <?php } else { ?>
                    <td><a class = "btn btn-outline-danger" href="borrarUsuario/<?php echo $_smarty_tpl->tpl_vars['cartonero']->value['id_usuario'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['cartonero']->value['id_usuario'];?>
">Borrar</a></td>
            <td><button type="button" class="btn btn-outline-light editar" id="btn-editar" value=<?php ob_start();
echo $_smarty_tpl->tpl_vars['cartonero']->value['id_usuario'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
 >Editar</button></td>
            <?php }?>
            
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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


<?php echo '<script'; ?>
 src="./js/main.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
