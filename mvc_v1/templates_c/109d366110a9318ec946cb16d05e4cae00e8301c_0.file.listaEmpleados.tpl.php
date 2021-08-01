<?php
/* Smarty version 3.1.39, created on 2021-08-01 22:55:05
  from 'C:\xampp\htdocs\crudTudai\mvc_v1\templates\listaEmpleados.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61070a2924ad67_08515869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '109d366110a9318ec946cb16d05e4cae00e8301c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crudTudai\\mvc_v1\\templates\\listaEmpleados.tpl',
      1 => 1627851301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61070a2924ad67_08515869 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<br>

<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

<div class="container-fluid">
<table class="table table-striped table-bordered text-center">
    <thead class="table-dark">
    <tr>
        <th scope="col">Apellido</th>
        <th scope="col">Nombre</th>
        <th scope="col">E-mail</th>
        <th scope="col">Imagen</th>
        <?php if ((isset($_SESSION['EMAIL_USER']))) {?>
            <th scope="col">Accion</th>
        <?php }?>
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
            <?php if ((isset($_SESSION['EMAIL_USER']))) {?>
                <td><img src='<?php echo $_smarty_tpl->tpl_vars['empleado']->value->imagen;?>
'></td>
            <?php }?>
            <?php if ((isset($_SESSION['EMAIL_USER']))) {?>
                <td><a href='actualizar/<?php echo $_smarty_tpl->tpl_vars['empleado']->value->id;?>
' class='btn btn-outline-success btn-sm'>Editar</a> -
                    <a href='eliminar/<?php echo $_smarty_tpl->tpl_vars['empleado']->value->id;?>
' class='btn btn-outline-danger btn-sm'>Borrar</a> -
                    <a href='detallar/<?php echo $_smarty_tpl->tpl_vars['empleado']->value->id;?>
' class='btn btn-outline-warning btn-sm'>Detalles</a>
                </td>
            <?php }?>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
