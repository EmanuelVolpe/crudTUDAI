<?php
/* Smarty version 3.1.39, created on 2021-07-26 03:49:18
  from 'C:\xampp\htdocs\crudTudai\mvc_v1\templates\showError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60fe149ea19738_60325977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6064358ef5e05c63249ad0068c688f990d4bb2ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crudTudai\\mvc_v1\\templates\\showError.tpl',
      1 => 1627264155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60fe149ea19738_60325977 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-5">
    <div class="jumbotron">
        <h1 class="display-4"><?php echo $_smarty_tpl->tpl_vars['msgDeError']->value;?>
</h1>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
