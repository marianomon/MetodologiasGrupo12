<?php
/* Smarty version 3.1.33, created on 2021-07-04 22:25:28
  from 'C:\xampp\htdocs\proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\ofertashome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60e21938823fb6_10580893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '718bf3217ac39ba8885fe85ff20937a1dcc7808b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\ofertashome.tpl',
      1 => 1625430188,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e21938823fb6_10580893 (Smarty_Internal_Template $_smarty_tpl) {
?> <section class="clean-block features dark">
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
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ofertas']->value, 'oferta');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oferta']->value) {
?>
    <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['oferta']->value['zonaGeografica'];?>
</td>
            <?php if ($_smarty_tpl->tpl_vars['oferta']->value['espacio'] == 1) {?>
                <td>Una caja</td>
            <?php } elseif ($_smarty_tpl->tpl_vars['oferta']->value['espacio'] == 2) {?>
              <td>Baul en un auto</td>
            <?php } elseif ($_smarty_tpl->tpl_vars['oferta']->value['espacio'] == 3) {?>
              <td>La caja de una camioneta</td>
            <?php } else { ?>
              <td>Un camion</td>
            <?php }?>
             <td><?php echo $_smarty_tpl->tpl_vars['oferta']->value['texto'];?>
</td>
            <td><a class = "btn btn-outline-danger" href="Login">Ver</a></td>      
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>  
</table>
    </section><?php }
}
