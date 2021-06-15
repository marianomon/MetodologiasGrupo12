<?php
/* Smarty version 3.1.33, created on 2021-06-15 07:17:16
  from 'C:\xampp\htdocs\proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\Balanza.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60c837dcd90977_53858351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '415af85e54f950f804d6d1399c8aee066324d5ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\Balanza.tpl',
      1 => 1623733537,
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
function content_60c837dcd90977_53858351 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navBalanza.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <main class="page contact-us-page">
    <section class="clean-block clean-form">
        <div class="container">
            <form action="subirBalanza" method="post">
                <div class="block-heading">
                    <h2 class="text-info">INGRESE MATERIALES</h2>
                    <p>Ingrese los datos de los materiales: </p>
                </div>
                <select name="material" class="form-select" aria-label="Default select example">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['materiales']->value, 'Material');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Material']->value) {
?>
                        <option  value=<?php echo $_smarty_tpl->tpl_vars['Material']->value['id_material'];?>
><?php echo $_smarty_tpl->tpl_vars['Material']->value['nombre'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <br>
                <br>
                <div class="form-group"><label>Kilogramos</label><input class="form-control"  id="kg" name="kg" placeholder="Peso" type="number" /></div>
                <div class="form-group"><button class="btn btn-primary btn-block" value="registrarseCartonero " type="submit">Registrarse</button></div>
            </form>
        </div>
    </section>
</main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
