<?php
/* Smarty version 3.1.33, created on 2021-06-13 20:18:22
  from 'C:\xampp\htdocs\Proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\RegistroCiudadano.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60c64beec3aab5_21413380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a1badd9db06ca4f2cd42d922b8c53fc64cd0bfb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\RegistroCiudadano.tpl',
      1 => 1622057922,
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
function content_60c64beec3aab5_21413380 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navdeslog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    //Barra de navegacion
    <main class="page contact-us-page">
    <section class="clean-block clean-form">
        <div class="container">
            
            <form action="registrarse" method="post">
                <div class="block-heading">
                    <h2 class="text-info">REGISTRO PARA CIUDADANO</h2>
                    <p>Ingrese sus datos en el siguiente formulario: </p>
                </div>
                <div class="form-group"><label>Nombre</label><input class="form-control"  id="nombre" name="nombre" placeholder="nombre" type="text" /></div>
                <div class="form-group"><label>Apellido</label><input  id="apellido" name="apellido" placeholder="apellido" class="form-control" type="text" /></div>
                <div class="form-group"><label>Email</label><input class="form-control" id="email" name="email" placeholder="email"  type="email" /></div>
                <div class="form-group"><label>Contraseña</label><input class="form-control" id="password" name="password" placeholder="password"  type="password" /></div>
                <div class="form-group"><label>Dirección</label><textarea id="direccion" name="direccion" placeholder="direccion" class="form-control"></textarea></div>
                <div class="form-group"><label>Teléfono</label><input class="form-control" id="telefono" name="telefono" placeholder="telefono"  type="number"></input></div>
                <div class="form-group"><p>Horario de preferencia</p>
                  <div><label><input type="radio" value="1" class="radio-horario" id="horarioPreferencia" name="horarioPreferencia" placeholder="horarioPreferencia" type="text" name="horario">9hs a 12hs</label></div>
                  <div><label for=""><input type="radio" value="2" class="radio-horario" type="text" name="horarioPreferencia">13hs a 17hs</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" value="registrarse" type="submit">Registrarse</button></div>
            </form>
        </div>
    </section>
</main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
