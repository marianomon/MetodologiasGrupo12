<?php
/* Smarty version 3.1.33, created on 2021-06-15 22:41:39
  from 'C:\xampp\htdocs\proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\PedidosADM.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60c910832daa69_30254972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c5b7d4a0f2259af5422d88228fa6339a85154b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\PedidosADM.tpl',
      1 => 1623789692,
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
function content_60c910832daa69_30254972 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-xxl materialesAdmin">
  <h2 class="titTabla">Pedidos de retiro</h2>
  <p class="textoExplicacion">Lista de pedidos de retiro realizadas por los usuarios</p>
  <table class="table table-dark table-striped tablaMateriales">
  <thead>
    <tr>
      <th scope="col">Numero de pedido</th>
      <th scope="col">Numero de usuario</th>
      <th scope="col">Apellido usuario</th>
      <th scope="col">volumen</th>
    </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_Pedidos']->value, 'pedidos');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pedidos']->value) {
?>
            <tr>
              <td scope="col"><?php echo $_smarty_tpl->tpl_vars['pedidos']->value->id_pedido;?>
</td>
              <td scope="col"><?php echo $_smarty_tpl->tpl_vars['pedidos']->value->id_usuario;?>
</th>
              <td scope="col"><?php echo $_smarty_tpl->tpl_vars['pedidos']->value->apellidoCiud;?>
</th>
              <td scope="col"><?php echo $_smarty_tpl->tpl_vars['pedidos']->value->volumen;?>
</td>
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
