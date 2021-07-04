<?php
/* Smarty version 3.1.33, created on 2021-07-04 23:34:30
  from 'C:\xampp\htdocs\proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\LoginCartonero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60e229663c1129_87933307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0813ec8abad647adb7c87788341ce009f1aaa70' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\LoginCartonero.tpl',
      1 => 1625434464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navdeslog.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60e229663c1129_87933307 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navdeslog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="page login-page">
    <section class="clean-block clean-form">
        <div class="container">
            <form action="logCartonero" method="post">
                <div class="block-heading">
                 <h2 class="text-info">Ingrese sus datos</h2>
                </div>
                <div class="form-group"><label>DNI</label><input class="form-control"  id="dni" name="dni" placeholder="DNI" type="text"/></div>
                <div class="form-group"></div>
                <button class="btn btn-primary btn-block" value="logCartonero"  type="submit">Entrar</button>
            </form>
        </div>
    </section>
</main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
