<?php
/* Smarty version 3.1.33, created on 2021-05-26 02:18:39
  from 'C:\xampp\htdocs\proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\ingreso.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60ad93dfbc51a6_04367469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10e317c71d70423ff0d895aa96b0e3d5882042c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\ingreso.tpl',
      1 => 1621988316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navdeslog.tpl' => 1,
  ),
),false)) {
function content_60ad93dfbc51a6_04367469 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
            <html lang="en">
            <head>
                <<meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
                <title><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</title>
                <link rel="stylesheet" href="css/css.css">
                <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
                <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
                <link rel="stylesheet" href="assets/css/styles.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
                <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
                <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
                <link rel="stylesheet" href="assets/css/smoothproducts.css">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">   
            </head>
            <body>
<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navdeslog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<br>
<br>
<div class="container-fluid login">
<main class="page login-page fondo">
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
</main>
</body>
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./js/bootstrap.min.js"><?php echo '</script'; ?>
>
</html><?php }
}
