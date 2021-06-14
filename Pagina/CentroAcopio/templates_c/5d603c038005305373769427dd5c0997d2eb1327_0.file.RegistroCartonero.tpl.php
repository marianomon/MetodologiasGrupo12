<?php
/* Smarty version 3.1.33, created on 2021-06-14 21:02:37
  from 'C:\xampp\htdocs\Proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\RegistroCartonero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60c7a7cd5824d7_74118920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d603c038005305373769427dd5c0997d2eb1327' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\RegistroCartonero.tpl',
      1 => 1623697287,
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
function content_60c7a7cd5824d7_74118920 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navdeslog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    //Barra de navegacion
    <main class="page contact-us-page">
    <section class="clean-block clean-form">
        <div class="container">
            
            <form action="registrarseCartonero" method="post">
                <div class="block-heading">
                    <h2 class="text-info">REGISTRO PARA CARTONERO</h2>
                    <p>Ingrese sus datos en el siguiente formulario: </p>
                </div>
                <div class="form-group"><label>Nombre</label><input class="form-control"  id="nombre" name="nombre" placeholder="nombre" type="text" /></div>
                <div class="form-group"><label>Apellido</label><input  id="apellido" name="apellido" placeholder="apellido" class="form-control" type="text" /></div>
                <div class="form-group"><label>Contraseña</label><input class="form-control" id="password" name="password" placeholder="password"  type="password"/></div>
                <div class="form-group"><label>Dirección</label><input id="direccion" name="direccion" placeholder="direccion" class="form-control"/></div>
                <div class="form-group"><label>DNI</label><input id="dni" name="dni" placeholder="DNI" class="form-control"/></div>
                <div class="form-group"><p>Fecha de Nacimiento</p><input type="date" id="nacimiento" name="nacimiento"
                        value="2000-07-22"
                         min="1900-01-01" max="2002-01-01"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" value="registrarseCartonero " type="submit">Registrarse</button></div>
            </form>
        </div>
    </section>
</main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
