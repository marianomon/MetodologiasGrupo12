<?php
/* Smarty version 3.1.33, created on 2021-07-05 00:13:44
  from 'C:\xampp\htdocs\proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\navBalanza.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60e232986e9326_92663835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a06404fa22cbe129390571c716c5d4e28eaea46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\navBalanza.tpl',
      1 => 1625436819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e232986e9326_92663835 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">Cooperativa de Recuperadores Urbanos de Tandil</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                     <?php if ($_smarty_tpl->tpl_vars['Activo']->value) {?>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="ObtenerMatAportados">Ver mis materiales aportados</a></li>
                     <?php }?>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="LogOut">Salir</a></li>
                </ul>
            </div>
        </div>
</nav><?php }
}
