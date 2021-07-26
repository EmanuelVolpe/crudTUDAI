<?php
/* Smarty version 3.1.39, created on 2021-07-26 03:29:05
  from 'C:\xampp\htdocs\crudTudai\mvc_v1\templates\formAltaEmpleado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60fe0fe133ac72_87327027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13c1dec31716252e3c3afb9e4e1b8e40deb0566c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crudTudai\\mvc_v1\\templates\\formAltaEmpleado.tpl',
      1 => 1627262589,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60fe0fe133ac72_87327027 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-5">
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <br>
    <!-- Content here -->
    <form method="post" , action="../router.php">
        <div class="row">
            <div class="col form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
            </div>
            <div class="col form-group">
                <label>Apellido</label>
                <input type="text" class="form-control" name="apellido" placeholder="Apellido">
            </div>
            <div class="col form-group">
                <label>E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="E-mail">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Enviar</button>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
