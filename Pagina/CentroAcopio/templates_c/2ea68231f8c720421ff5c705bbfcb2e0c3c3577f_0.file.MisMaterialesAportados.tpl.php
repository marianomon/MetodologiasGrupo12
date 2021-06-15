<?php
/* Smarty version 3.1.33, created on 2021-06-15 03:41:49
  from 'C:\xampp\htdocs\Proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\MisMaterialesAportados.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60c8055d74fd69_36926412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ea68231f8c720421ff5c705bbfcb2e0c3c3577f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\MisMaterialesAportados.tpl',
      1 => 1623721306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navBalanza.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60c8055d74fd69_36926412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navBalanza.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-xxl materialesAdmin">
  <h2 class="titTabla">Materiales acetados</h2>
  <table class="table table-dark table-striped tablaMateriales">
  <thead>
    <tr>
      <th scope="col">Material</th>
      <th scope="col">Kg Aportados</th>
    </tr>
  </thead>
  <tbody>
  
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['materiales']->value, 'Material', false, NULL, 'foo', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Material']->value) {
?>
    <tr>
     <td><?php echo $_smarty_tpl->tpl_vars['Material']->value['nombre'];?>
</td>
     <?php $_smarty_tpl->_assignInScope('sum', '0');?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['materialesAport']->value, 'MaterialesAport');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MaterialesAport']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['Material']->value['id_material'] == $_smarty_tpl->tpl_vars['MaterialesAport']->value['idMaterial']) {?>
                    
                     <?php $_smarty_tpl->_assignInScope('sum', $_smarty_tpl->tpl_vars['sum']->value+$_smarty_tpl->tpl_vars['MaterialesAport']->value['cantidad']);?>
                    
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <td><?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
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
