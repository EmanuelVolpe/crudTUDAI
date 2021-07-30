<?php
/* Smarty version 3.1.39, created on 2021-07-28 22:57:47
  from 'C:\xampp\htdocs\crudTudai\mvc_v1\templates\formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6101c4cb029a85_93035805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff6c11958491a648d83765368c112257f7a2badd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crudTudai\\mvc_v1\\templates\\formLogin.tpl',
      1 => 1627505864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6101c4cb029a85_93035805 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container mt-5">
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <br>
    <form method="POST" action="verify">
        <div class="col-4">
            <div class="row">
                <label>E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="E-mail">
            </div>
            <div class="row mt-2">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Contraseña">
            </div>
            <br>
            <?php if ($_smarty_tpl->tpl_vars['msgDeError']->value) {?>
                <div class="row mt-2 alert alert-danger">
                    <?php echo $_smarty_tpl->tpl_vars['msgDeError']->value;?>

                </div>
            <?php }?>

        </div>
        <button type="submit" class="btn btn-success mt-3">Ingresar</button>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
