<?php
/* Smarty version 3.1.33, created on 2021-06-15 02:31:14
  from 'C:\xampp\htdocs\Proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\Balanza.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60c7f4d26bebc3_67434566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd21367d44051d3d45d8e2829a336365e8a463877' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\Balanza.tpl',
      1 => 1623717072,
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
function content_60c7f4d26bebc3_67434566 (Smarty_Internal_Template $_smarty_tpl) {
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
