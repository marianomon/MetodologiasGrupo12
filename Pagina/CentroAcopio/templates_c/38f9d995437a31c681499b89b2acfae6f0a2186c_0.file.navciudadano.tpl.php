<?php
/* Smarty version 3.1.33, created on 2021-07-03 23:59:47
  from 'C:\xampp\htdocs\proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\navciudadano.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60e0ddd37966e7_91416273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38f9d995437a31c681499b89b2acfae6f0a2186c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\navciudadano.tpl',
      1 => 1625349582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e0ddd37966e7_91416273 (Smarty_Internal_Template $_smarty_tpl) {
?>    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">Cooperativa de Recuperadores Urbanos de Tandil</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="generarPedidoRetiro">Retiros</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="ofertas">Ofertas</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="LogOut">Salir</a></li>
                </ul>
            </div>
        </div>
    </nav><?php }
}
