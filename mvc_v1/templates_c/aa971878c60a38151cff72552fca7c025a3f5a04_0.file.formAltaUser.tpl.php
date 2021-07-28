<?php
/* Smarty version 3.1.39, created on 2021-07-27 22:05:14
  from 'C:\xampp\htdocs\crudTudai\mvc_v1\templates\formAltaUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_610066fa8d6ba4_63817739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa971878c60a38151cff72552fca7c025a3f5a04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crudTudai\\mvc_v1\\templates\\formAltaUser.tpl',
      1 => 1627415518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_610066fa8d6ba4_63817739 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-5">
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <br>
    <form method="POST" action="agregarUsuario">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <label>Apellido</label>
                    <input type="text" class="form-control" name="apellido" placeholder="Apellido">
                </div>
                <div class="col-5">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                </div>
            </div>
            <div class="row mt-3 col-6">
                <label>E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="E-mail">
            </div>
            <div class="row mt-3 col-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Contraseña">
            </div>
        </div>
        <button type="submit" class="btn btn-success mt-3">Guardar</button>
    </form>
    <br>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
