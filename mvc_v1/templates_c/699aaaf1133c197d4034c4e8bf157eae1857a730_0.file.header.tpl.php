<?php
/* Smarty version 3.1.39, created on 2021-07-30 05:43:30
  from 'C:\xampp\htdocs\crudTudai\mvc_v1\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_610375628c2ce4_32299074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '699aaaf1133c197d4034c4e8bf157eae1857a730' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crudTudai\\mvc_v1\\templates\\header.tpl',
      1 => 1627616605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610375628c2ce4_32299074 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href=<?php echo BASE_URL;?>
>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title><?php echo $_smarty_tpl->tpl_vars['tituloPagina']->value;?>
</title>
</head>

<body>

<?php if ((isset($_SESSION['EMAIL_USER']))) {?>

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav d-flex w-100">
            <li class="nav-item">
                <a class="nav-link" href="home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="listar">Empleados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="mostrarFormularioEmpleado">Alta Empleado</a>
            </li>
            <li class="nav-item ml-auto">
                <a class="nav-link" href="logout"><?php echo $_SESSION['EMAIL_USER'];?>
 (LOGOUT)</a>
            </li>
        </ul>
    </div>
</nav>
<br>

<?php } else { ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav d-flex w-100">
            <li class="nav-item">
                <a class="nav-link" href="home">Home</a>
            </li>                
        </ul>
    </div>
</nav>
<br>


<?php }
}
}
