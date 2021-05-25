<?php
/* Smarty version 3.1.33, created on 2021-05-25 21:34:26
  from 'C:\xampp\htdocs\Proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\PedidoDeRetiro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60ad5142a38e41_57401722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '758ff722f40627b0c26b2bbf349dcd0e568e9ad3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\PedidoDeRetiro.tpl',
      1 => 1621971232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ad5142a38e41_57401722 (Smarty_Internal_Template $_smarty_tpl) {
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
        <form action="index.html fondo" method="post">
            <h2 class="text-center">Formulario de ciudadano</h2>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Nombre"></div>
            <div class="form-group"><input class="form-control" type="text" name="apellido" placeholder="Apellido"></div>
            <div class="form-group"><input class="form-control" type="text" name="direccion" placeholder="Direccion"></div>
            <div class="form-group form-horario"><p>Tamanio</p>
            <div class="form-group"><label for=""><input type="radio" checked="checked" value="1" class="radio-horario" type="text" name="horario">menos de 1 metro²</label></div>
            <div class="form-group"><label for=""><input type="radio" value="1" class="radio-horario" type="text" name="horario">entre 1 y 2 metros²</label></div>
            <div class="form-group"><label for=""><input type="radio" value="1" class="radio-horario" type="text" name="horario">entre 2 y 4 metros²</label></div>
            <div class="form-group"><label for=""><input type="radio" value="1" class="radio-horario" type="text" name="horario">mas de 4 metros²</label></div>
            </div>
            <div class="form-group"><button class="btn btn-primary" type="submit" style="background-color: rgb(5,218,116);">Enviar </button></div>
        </form>
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
