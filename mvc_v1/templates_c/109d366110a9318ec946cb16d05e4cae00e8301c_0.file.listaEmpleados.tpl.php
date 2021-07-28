<?php
/* Smarty version 3.1.39, created on 2021-07-26 04:09:56
  from 'C:\xampp\htdocs\crudTudai\mvc_v1\templates\listaEmpleados.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60fe1974d32ce0_96844886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '109d366110a9318ec946cb16d05e4cae00e8301c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crudTudai\\mvc_v1\\templates\\listaEmpleados.tpl',
      1 => 1627265387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60fe1974d32ce0_96844886 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<br>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<table class="table">
    <thead class="table-dark">
    <tr>
        <th scope="col">Apellido</th>
        <th scope="col">Nombre</th>
        <th scope="col">E-mail</th>
        <th scope="col">Accion</th>
    </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['empleados']->value, 'empleado');
$_smarty_tpl->tpl_vars['empleado']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['empleado']->value) {
$_smarty_tpl->tpl_vars['empleado']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['empleado']->value->apellido;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['empleado']->value->nombre;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['empleado']->value->email;?>
</td>
            <td><a href='actualizar/<?php echo $_smarty_tpl->tpl_vars['empleado']->value->id;?>
' class='btn btn-outline-success btn-sm'>Editar</a> -
                <a href='eliminar/<?php echo $_smarty_tpl->tpl_vars['empleado']->value->id;?>
' class='btn btn-outline-danger btn-sm'>Borrar</a> -
                <a href='detallar/<?php echo $_smarty_tpl->tpl_vars['empleado']->value->id;?>
' class='btn btn-outline-warning btn-sm'>Detalles</a>
            </td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
