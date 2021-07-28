<?php
/* Smarty version 3.1.39, created on 2021-07-27 22:05:13
  from 'C:\xampp\htdocs\crudTudai\mvc_v1\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_610066f94a7e72_36503237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a3fe5da4c1ad052107fbc05840ffe15187821cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crudTudai\\mvc_v1\\templates\\home.tpl',
      1 => 1627416309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_610066f94a7e72_36503237 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-5">
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <div class="jumbotron">
        <div class="row">
            <div "col form-group">
                <a class="btn btn-success" href="login">Login</a>
            </div>
            <div "col form-group">
                <a class="btn btn-danger" href="mostrarFormularioUser">Alta</a>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
