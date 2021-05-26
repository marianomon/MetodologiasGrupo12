<?php
/* Smarty version 3.1.33, created on 2021-05-26 01:37:01
  from 'C:\xampp\htdocs\proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\RegistroCiudadano.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60ad8a1d20c664_73536261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd16fb85bdfb72a5266cc686dd84c15d9749a7e02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\RegistroCiudadano.tpl',
      1 => 1621985814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navdeslog.tpl' => 1,
  ),
),false)) {
function content_60ad8a1d20c664_73536261 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navdeslog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <main class="page contact-us-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">REGISTRO PARA CIUDADANO</h2>
                <p>Ingrese sus datos en el siguiente formulario: </p>
            </div>
            <form>
                <div class="form-group"><label>Nombre</label><input class="form-control" type="text" /></div>
                <div class="form-group"><label>Apellido</label><input class="form-control" type="text" /></div>
                <div class="form-group"><label>Email</label><input class="form-control" type="email" /></div>
                <div class="form-group"><label>Contraseña</label><input class="form-control" type="password" /></div>
                <div class="form-group"><label>Dirección</label><textarea class="form-control"></textarea></div>
                <div class="form-group"><label>Teléfono</label><input class="form-control" type="number"></input></div>
                <div class="form-group"><p>Horario de preferencia</p>
                  <div><label><input type="radio" checked="checked" value="1" class="radio-horario" type="text" name="horario">9hs a 12hs</label></div>
                  <div><label for=""><input type="radio" value="1" class="radio-horario" type="text" name="horario">13hs a 17hs</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Send</button></div>
            </form>
        </div>
    </section>
</main>
</body>
</html>
<?php }
}
