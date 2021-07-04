<?php
/* Smarty version 3.1.33, created on 2021-07-04 00:30:24
  from 'C:\xampp\htdocs\proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\ofertas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60e0e5000eff23_24137298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d951e83721c7c89bfeb6e0294353ecb0d3b2169' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\ofertas.tpl',
      1 => 1625351419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navciudadano.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60e0e5000eff23_24137298 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navciudadano.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-xxl materialesAdmin">
<div class="agregarMateriales">
    <h2>Agregar oferta</h2>
    <form action="agregarOferta" method="post">
      <div class="contenedor-inputs">
        <input type="text" class="form-control nombreMaterialAgregar" name="zona" placeholder="Zona geografica">
        <input type="text" class="form-control descripcionAgregar" name="textoLibre" rows="3" placeholder="Texto libre">
        <div class="contenedorRadio">
          <h3>¿Cuanto espacio disponible tenes?</h3>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1" name="espacio">
            <label class="form-check-label" for="inlineRadio1">Una caja</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2" name="espacio">
            <label class="form-check-label" for="inlineRadio2">El baul de un auto</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="3" name="espacio">
            <label class="form-check-label" for="inlineRadio2">Una caja de una camioneta</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="4" name="espacio">
            <label class="form-check-label" for="inlineRadio2">Un camion</label>
          </div>
        </div>
        <button type="submit" class="btn btn-success mb-3">Agregar</button>
      </div>
    </form>
  </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
