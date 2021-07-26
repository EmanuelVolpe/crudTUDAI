<?php
/* Smarty version 3.1.39, created on 2021-07-26 03:37:04
  from 'C:\xampp\htdocs\crudTudai\mvc_v1\templates\detalleEmpleado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60fe11c0d89fa5_42231854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfd8348097dafa02ed4ff2c99ebec285b696e633' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crudTudai\\mvc_v1\\templates\\detalleEmpleado.tpl',
      1 => 1627263419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60fe11c0d89fa5_42231854 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<br>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<table class="table">
    <thead class="table-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Apellido</th>
        <th scope="col">Nombre</th>
        <th scope="col">E-mail</th>
        <th scope="col">Accion</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['empleado']->value->id;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['empleado']->value->apellido;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['empleado']->value->nombre;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['empleado']->value->email;?>
</td>
        <td><a href =<?php echo BASE_URL;?>
listar class="btn btn-outline-success btn-sm">Volver</a></td>
    </tr>
    </tbody>
</table>';

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
