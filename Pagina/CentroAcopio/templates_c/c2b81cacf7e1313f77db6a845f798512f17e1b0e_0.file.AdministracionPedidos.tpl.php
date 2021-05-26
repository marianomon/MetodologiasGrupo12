<?php
/* Smarty version 3.1.33, created on 2021-05-26 02:18:49
  from 'C:\xampp\htdocs\Proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\AdministracionPedidos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60ad93e9c00907_83964578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2b81cacf7e1313f77db6a845f798512f17e1b0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\AdministracionPedidos.tpl',
      1 => 1621988323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ad93e9c00907_83964578 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Registro Ciudadano</title>
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">Cooperativa de Recuperadores Urbanos de Tandil<br></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.html">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="Login.html">Login</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="EleccionReg.html">Registrarme</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="Ofertas.html">Ofertas</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div class="contact-clean fondo">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Pedidos']->value, 'pedidos');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pedidos']->value) {
?>
         <form action="agregarPedido" method="post">
           <div class="form-group"><textarea class="form-control" type="text" name="direccion" placeholder="direccion">$Usuario['direccion']</textarea></div>
           <div class="form-group"><input class="form-control" type="text" name="direccion" placeholder="direccion">$pedidos['volumen']</div>
            <div class="form-group"><button class="btn btn-primary" type="submit" style="background-color: rgb(5,218,116);">Aceptar </button></div>
            <div class="form-group"><button class="btn btn-primary fondoRojo" type="submit" style="background-color: rgb(5,218,116);">Denegar </button></div>
        </form>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </div>
    <main class="page landing-page"></main>
    <?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/smoothproducts.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/theme.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
