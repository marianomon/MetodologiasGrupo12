<?php
/* Smarty version 3.1.33, created on 2021-06-15 01:28:23
  from 'C:\xampp\htdocs\Proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60c7e61799c324_85300090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5a9f01039faef97a257849608c9c59193643797' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\home.tpl',
      1 => 1623713199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navdeslog.tpl' => 1,
    'file:sectionMateriales.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60c7e61799c324_85300090 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navdeslog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="fondoMain">
    <div class="difuminado">
        <h2>!Bienvenido/a¡</h2>
        <p>Te damos la bienvenida a la Cooperativa de Recuperadores Urbanos de Tandil</p>
        <p>En esta página podrás anotarte para recolecciones, Informarte de los
        materiales reciclables, entre otras cosas más!
    </p>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:sectionMateriales.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
