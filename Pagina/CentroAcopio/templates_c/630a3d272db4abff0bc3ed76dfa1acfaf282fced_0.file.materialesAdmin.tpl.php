<?php
/* Smarty version 3.1.33, created on 2021-06-17 20:20:49
  from 'C:\xampp\htdocs\proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\materialesAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60cb9281ce6b29_78403425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '630a3d272db4abff0bc3ed76dfa1acfaf282fced' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\materialesAdmin.tpl',
      1 => 1623954017,
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
function content_60cb9281ce6b29_78403425 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-xxl materialesAdmin">
  <h2 class="titTabla">Materiales aceptados</h2>
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

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
