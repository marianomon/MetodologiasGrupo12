<?php
/* Smarty version 3.1.33, created on 2021-05-26 08:41:29
  from 'C:\xampp\htdocs\proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\PedidoDeRetiro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60aded999f8dc9_97162769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63d34d14f9a268608f6bca074d98691b5b1249ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\PedidoDeRetiro.tpl',
      1 => 1622011274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navCiudadano.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60aded999f8dc9_97162769 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navCiudadano.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="contact-clean transparente">
        <form action="agregarPedido" method="post" enctype="multipart/form-data">
            <h2 class="text-center">Formulario de ciudadano</h2>
            <div class=" hidden"><input class="form-control" type="radio" value="11254" checked="checked" class="hidden" name="id"></div>
            <div class="form-group form-horario"><p>volumen</p>
            <div class="form-group"><label for=""><input type="radio" checked="checked" value="1" class="radio-horario" type="text" name="volumen">menos de 1 metro²</label></div>
            <div class="form-group"><label for=""><input type="radio" value="2" class="radio-horario" type="text" name="volumen">entre 1 y 2 metros²</label></div>
            <div class="form-group"><label for=""><input type="radio" value="3" class="radio-horario" type="text" name="volumen">entre 2 y 4 metros²</label></div>
            <div class="form-group"><label for=""><input type="radio" value="4" class="radio-horario" type="text" name="volumen">mas de 4 metros²</label></div>
            <form class="form-group" method="post" action="addImages/<?php echo $_smarty_tpl->tpl_vars['products']->value->id_product;?>
" enctype="multipart/form-data" id="imagesToUpload">
                <input type="file" name="image" id="imageToUpload" multiple>
                <button type="submit" class="btn btn-primary ">Add</button>
            </form>
            <div class="form-group"><button class="btn btn-primary" type="submit" style="background-color: rgb(5,218,116);">Enviar </button></div>
        </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
