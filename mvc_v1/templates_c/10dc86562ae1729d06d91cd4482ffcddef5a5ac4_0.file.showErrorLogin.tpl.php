<?php
/* Smarty version 3.1.39, created on 2021-07-28 22:22:05
  from 'C:\xampp\htdocs\crudTudai\mvc_v1\templates\showErrorLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6101bc6d777474_56274478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10dc86562ae1729d06d91cd4482ffcddef5a5ac4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crudTudai\\mvc_v1\\templates\\showErrorLogin.tpl',
      1 => 1627503716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6101bc6d777474_56274478 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container mt-5">
    <div class="jumbotron">
        <h1 class="display-4"><?php echo $_smarty_tpl->tpl_vars['msgDeError']->value;?>
</h1>
        <br>
        <a href =<?php echo BASE_URL;?>
login class="btn btn-outline-success btn-sm">Volver</a>
    </div>
</div><?php }
}
