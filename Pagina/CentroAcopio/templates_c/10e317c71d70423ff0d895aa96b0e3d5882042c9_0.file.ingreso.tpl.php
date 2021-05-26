<?php
/* Smarty version 3.1.33, created on 2021-05-26 02:45:31
  from 'C:\xampp\htdocs\proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\ingreso.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60ad9a2bd1c584_44703950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10e317c71d70423ff0d895aa96b0e3d5882042c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\ingreso.tpl',
      1 => 1621989916,
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
function content_60ad9a2bd1c584_44703950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navdeslog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="page login-page">
    <section class="clean-block clean-form">
        <div class="container">
            <form action="iniciarSesion" method="post">
                <div class="block-heading">
                 <h2 class="text-info">Ingrese sus datos</h2>
                </div>
                <div class="form-group"><label for="email">Email</label><input class="form-control item" type="email" name="email" id="email" aria-describedby="usuarioId" placeholder="email" /></div>

                <div class="form-group"><label for="password">Password</label>  
                <input class="form-control" type="password" id="password" name="password" placeholder="password" /></div>
                <div class="form-group"></div>
                <button class="btn btn-primary btn-block" value="Login"  type="submit">Entrar</button>
            </form>
        </div>
    </section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
