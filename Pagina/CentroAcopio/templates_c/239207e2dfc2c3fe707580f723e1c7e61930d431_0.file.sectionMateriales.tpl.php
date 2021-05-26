<?php
/* Smarty version 3.1.33, created on 2021-05-26 01:05:22
  from 'C:\xampp\htdocs\proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\sectionMateriales.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60ad82b2a98e89_21530352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '239207e2dfc2c3fe707580f723e1c7e61930d431' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\sectionMateriales.tpl',
      1 => 1621983920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ad82b2a98e89_21530352 (Smarty_Internal_Template $_smarty_tpl) {
?> <section class="clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">¿Que Materiales Reciclamos y Como?</h2>
                    <p></p>
                </div>
                <div class="row justify-content-center">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['materiales']->value, 'Material');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Material']->value) {
?>
                    <div class="col-md-5 feature-box">
                        <i class="bi bi-check-circle"></i>
                        <h4 style="font-size: 23px;"><?php echo $_smarty_tpl->tpl_vars['Material']->value['nombre'];?>
</h4>
                        <p style="color: rgb(0,0,0);"><strong> <?php echo $_smarty_tpl->tpl_vars['Material']->value['descripcion'];?>
</strong></p>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </section><?php }
}
