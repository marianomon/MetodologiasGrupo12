<?php
/* Smarty version 3.1.33, created on 2021-07-04 22:34:41
  from 'C:\xampp\htdocs\proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\navdeslog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60e21b61272993_16870034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eed7d31665dd997990b4e4d9d5fcfc1201b029f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\navdeslog.tpl',
      1 => 1625430878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e21b61272993_16870034 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">Cooperativa de Recuperadores Urbanos de Tandil</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="home">Inicio</a></li>
    			<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Ingresar
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="Ciudadano">Ciudadano</a></li>
                            <li><a class="dropdown-item" href="Administrador">Administrador</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Registrarse
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
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
