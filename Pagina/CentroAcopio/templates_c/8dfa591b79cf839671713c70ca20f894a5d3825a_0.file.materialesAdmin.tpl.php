<?php
/* Smarty version 3.1.33, created on 2021-06-14 20:34:02
  from 'C:\xampp\htdocs\Proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\materialesAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60c7a11abb2093_20823616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dfa591b79cf839671713c70ca20f894a5d3825a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\materialesAdmin.tpl',
      1 => 1623695633,
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
function content_60c7a11abb2093_20823616 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['materiales']->value, 'Material');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Material']->value) {
?>
    <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['Material']->value['nombre'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['Material']->value['descripcion'];?>
</td>
            <td><a class = "btn btn-outline-danger" href="borrarMaterial/<?php echo $_smarty_tpl->tpl_vars['Material']->value['id_material'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['Material']->value['id_material'];?>
">Borrar</a></td>
            <td><button type="button" class="btn btn-outline-light editar" id="btn-editar" value=<?php echo $_smarty_tpl->tpl_vars['Material']->value['id_material'];?>
 >Editar</button></td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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

<?php echo '<script'; ?>
 src="./js/main.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
