<!DOCTYPE html>
<html lang="en">

<head>
    <base href={BASE_URL}>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>{$tituloPagina}</title>
</head>

<body>

{if isset($smarty.session.EMAIL_USER)}

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
                <a class="nav-link" href="logout">{$smarty.session.EMAIL_USER} (LOGOUT)</a>
            </li>
        </ul>
    </div>
</nav>
<br>

{else}

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


{/if}