<?php
/* Smarty version 3.1.33, created on 2021-07-04 22:25:43
  from 'C:\xampp\htdocs\proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\PedidoDeRetiro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60e21947298288_73893018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63d34d14f9a268608f6bca074d98691b5b1249ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\PedidoDeRetiro.tpl',
      1 => 1625352939,
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
function content_60e21947298288_73893018 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navCiudadano.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="contact-clean transparente">
        <form action="agregarPedido" method="post" enctype="multipart/form-data">
            <h2 class="text-center">Formulario de Pedido de Retiro</h2>
            <div class=" hidden"><input class="form-control" type="radio" value="11254" checked="checked" class="hidden" name="id"></div>
            <div class="form-group form-horario"><p>Los materiales entran en:</p>
            <div class="form-group"><label for=""><input type="radio" checked="checked" value="1" class="radio-horario" type="text" name="volumen">Entra en una caja</label></div>
            <div class="form-group"><label for=""><input type="radio" value="2" class="radio-horario" type="text" name="volumen">Entra en el baúl de un auto</label></div>
            <div class="form-group"><label for=""><input type="radio" value="3" class="radio-horario" type="text" name="volumen">Entra en la caja de una camioneta</label></div>
            <div class="form-group"><label for=""><input type="radio" value="4" class="radio-horario" type="text" name="volumen">Es necesario un camión</label></div>
            <form class="form-group" method="post" action="addImages/<?php echo $_smarty_tpl->tpl_vars['products']->value->id_product;?>
" enctype="multipart/form-data" id="imagesToUpload">
                <input type="file" name="image" id="imageToUpload" multiple>
                <button type="submit" class="btn btn-primary ">Add</button>
            </form>
            <div class="form-group"><button class="btn btn-primary" type="submit" style="background-color: rgb(5,218,116);">Enviar</button></div>
        </form>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
