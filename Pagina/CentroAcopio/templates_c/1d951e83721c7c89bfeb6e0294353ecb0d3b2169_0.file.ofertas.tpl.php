<?php
/* Smarty version 3.1.33, created on 2021-07-07 23:12:48
  from 'C:\xampp\htdocs\proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\ofertas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60e618d0554944_10746373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d951e83721c7c89bfeb6e0294353ecb0d3b2169' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\ofertas.tpl',
      1 => 1625692360,
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
function content_60e618d0554944_10746373 (Smarty_Internal_Template $_smarty_tpl) {
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
            <input class="form-check-input" type="radio" name="espacio" checked="checked" id="inlineRadio1" value="1" >
            <label class="form-check-label" for="inlineRadio1">Una caja</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="espacio" id="inlineRadio2" value="2" >
            <label class="form-check-label" for="inlineRadio2">El baul de un auto</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="espacio" id="inlineRadio3" value="3" >
            <label class="form-check-label" for="inlineRadio3">Una caja de una camioneta</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="espacio" id="inlineRadio4" value="4" >
            <label class="form-check-label" for="inlineRadio4">Un camion</label>
          </div>
        </div>
        <button type="submit" class="btn btn-success mb-3">Agregar</button>
      </div>
    </form>
  </div>
  <div class="row justify-content-md-center">
   <div class="col-10 ">
      <h2 class="titTabla">Mis Ofertas abiertas:</h2>
      <table class="table-dark table-striped tablaMateriales ofertasAbiertas">
        <tbody>
        <td>Zona</td>
        <td>Espacio</td>
        <td>Descripcion</td>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ofertas']->value, 'oferta');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oferta']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['oferta']->value['id_usuario'] == $_smarty_tpl->tpl_vars['id']->value) {?>
                <input type="number" class="form-control idMaterial" name="idOferta" value="<?php echo $_smarty_tpl->tpl_vars['oferta']->value['id_oferta'];?>
">
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['oferta']->value['zonaGeografica'];?>
</td>
                  <?php if ($_smarty_tpl->tpl_vars['oferta']->value['espacio'] == 1) {?>
                      <td>Una caja</td>
                  <?php } elseif ($_smarty_tpl->tpl_vars['oferta']->value['espacio'] == 2) {?>
                    <td>Baul en un auto</td>
                  <?php } elseif ($_smarty_tpl->tpl_vars['oferta']->value['espacio'] == 3) {?>
                    <td>La caja de una camioneta</td>
                  <?php } else { ?>
                    <td>Un camion</td>
                  <?php }?>
                    <td><?php echo $_smarty_tpl->tpl_vars['oferta']->value['texto'];?>
</td>
                </tr>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['postulantes']->value, 'postulante');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['postulante']->value) {
?>
                      <?php if ($_smarty_tpl->tpl_vars['postulante']->value['idOferta'] == $_smarty_tpl->tpl_vars['oferta']->value['id_oferta']) {?>
                        <tr>
                          <td  class="espaciado">Postulaciones:</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['postulante']->value['nombre'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['postulante']->value['apellido'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['postulante']->value['direccion'];?>
</td>
                          <td><a class="btn btn-outline-success" href="aceptarPostulacion/<?php echo $_smarty_tpl->tpl_vars['oferta']->value['id_oferta'];?>
">Aceptar</a> <a class="btn btn-outline-danger" href="rechazarPostulacion/<?php echo $_smarty_tpl->tpl_vars['oferta']->value['id_oferta'];?>
">Rechazar</a></td>
                        </tr>
                      <?php }?>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>  
      </table>
    </div>
    <br>
    <br>
    <div class="col-10 ">
      <h2 class="titTabla">Ofertas abiertas:</h2>
      <table class="table-dark table-striped tablaMateriales ofertasAbiertas">
        <tbody>
        <td>Zona</td>
        <td>Espacio</td>
        <td>Descripcion</td>
        <td>Postulacion</td>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ofertas']->value, 'oferta');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oferta']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['oferta']->value['id_usuario'] != $_smarty_tpl->tpl_vars['id']->value && $_smarty_tpl->tpl_vars['oferta']->value['id_Postulado'] != $_smarty_tpl->tpl_vars['id']->value) {?>
              <form action="postular" method="post">
                <input type="number" class="form-control idMaterial" name="idOferta" value="<?php echo $_smarty_tpl->tpl_vars['oferta']->value['id_oferta'];?>
">
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['oferta']->value['zonaGeografica'];?>
</td>
                  <?php if ($_smarty_tpl->tpl_vars['oferta']->value['espacio'] == 1) {?>
                      <td>Una caja</td>
                  <?php } elseif ($_smarty_tpl->tpl_vars['oferta']->value['espacio'] == 2) {?>
                    <td>Baul en un auto</td>
                  <?php } elseif ($_smarty_tpl->tpl_vars['oferta']->value['espacio'] == 3) {?>
                    <td>La caja de una camioneta</td>
                  <?php } else { ?>
                    <td>Un camion</td>
                  <?php }?>
                    <td><?php echo $_smarty_tpl->tpl_vars['oferta']->value['texto'];?>
</td>
                  <td><button class="btn btn-outline-danger" id="btn-postular" type="submit">Postularme</button></td>
                </tr>
              </form>
            <?php }?>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>  
      </table>
    </div>
  </div>
  

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
