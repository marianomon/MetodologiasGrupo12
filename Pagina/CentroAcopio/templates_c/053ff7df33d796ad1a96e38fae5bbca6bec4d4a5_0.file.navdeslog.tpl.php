<?php
/* Smarty version 3.1.33, created on 2021-06-15 01:48:32
  from 'C:\xampp\htdocs\Proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\navdeslog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60c7ead0e1dad1_10146429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '053ff7df33d796ad1a96e38fae5bbca6bec4d4a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\navdeslog.tpl',
      1 => 1623714509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c7ead0e1dad1_10146429 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">Cooperativa de Recuperadores Urbanos de Tandil</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="home">Inicio</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
ofertas">Ofertas</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="Login">Ingresar</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Registrarse
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="registrarCartonero">Cartonero</a></li>
                            <li><a class="dropdown-item" href="registrarCiudadano">Ciudadano</a></li>
                        </ul>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="balanzaReg">Balanza</a></li>
                </ul>
            </div>
        </div>
</nav>

    <?php }
}
