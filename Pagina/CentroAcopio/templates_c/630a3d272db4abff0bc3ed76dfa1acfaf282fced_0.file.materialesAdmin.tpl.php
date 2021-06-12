<?php
/* Smarty version 3.1.33, created on 2021-06-13 01:22:45
  from 'C:\xampp\htdocs\proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\materialesAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60c541c51239d6_87538397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '630a3d272db4abff0bc3ed76dfa1acfaf282fced' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\materialesAdmin.tpl',
      1 => 1623539877,
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
function content_60c541c51239d6_87538397 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['materiales']->value, 'Material');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Material']->value) {
?>
    <tr>
            <th scope="row"><?php echo $_smarty_tpl->tpl_vars['Material']->value['id_material'];?>
</th>
            <td><?php echo $_smarty_tpl->tpl_vars['Material']->value['nombre'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['Material']->value['descripcion'];?>
</td>
            <td><button type="button" class="btn btn-outline-danger" id="borrar" value=<?php echo $_smarty_tpl->tpl_vars['Material']->value['id_material'];?>
>Borrar</button></td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
