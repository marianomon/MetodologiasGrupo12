<?php
/* Smarty version 3.1.33, created on 2021-06-13 20:49:02
  from 'C:\xampp\htdocs\Proyectos\MetodologiasGrupo12\Pagina\CentroAcopio\templates\selecRegistro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60c6531e723eb6_18843223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ffe6831b3b0d18e0772dc49413bb7d17ee1e6d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\MetodologiasGrupo12\\Pagina\\CentroAcopio\\templates\\selecRegistro.tpl',
      1 => 1623610120,
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
function content_60c6531e723eb6_18843223 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navdeslog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <main class="page contact-us-page">
        <div class="row justify-content-md-center ">
            <div class="col-6">
                <div class="row justify-content-md-center ">
                    <div class="col-12 selectReg">Elija como desea registrarse:</div>
                    <div class="col-6 selectRegCentered">
                        <a class="BtnSelectTipoRegistro " href="registrarCiudadano">Ciudadano</a>
                    </div>
                    <div class="col-6 selectRegCentered">
                        <a class="BtnSelectTipoRegistro" href="RegistrarCartonero">Cartonero</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
