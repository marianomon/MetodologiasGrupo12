<?php
/* Smarty version 3.1.33, created on 2021-05-26 05:57:13
  from 'C:\xampp\htdocs\proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\navCiudadano.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60adc719578f71_63200412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '357a2cb1973a2e1e155c6c86ac81c362a077e669' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\navCiudadano.tpl',
      1 => 1622000987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60adc719578f71_63200412 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">Cooperativa de Recuperadores Urbanos de Tandil</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="generarPedidoRetiro">Retiros</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
ofertas">Ofertas</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="LogOut">Salir</a></li>
                </ul>
            </div>
        </div>
    </nav><?php }
}
