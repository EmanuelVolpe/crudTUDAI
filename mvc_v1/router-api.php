<?php
    require_once('libs/Router.php');
    require_once('api/empleado.api.controller.php');

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('empleados',     'GET',     'ApiEmpleadoController', 'obtenerEmpleados');
$router->addRoute('empleados/:ID', 'GET',     'ApiEmpleadoController', 'obtenerEmpleado');
$router->addRoute('empleados/:ID', 'DELETE',  'ApiEmpleadoController', 'eliminarEmpleado');
$router->addRoute('empleados',     'POST',    'ApiEmpleadoController', 'agregarEmpleado');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);