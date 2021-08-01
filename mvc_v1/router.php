<?php
include_once 'app/controllers/empleado.controller.php';
include_once 'app/controllers/auth.controller.php';

// defino la base url para la construccion de links con urls semánticas
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define('LOGIN', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/login');
define('LOGOUT', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/logout');
define('LISTAR', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/listar');

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'listar'; // acción por defecto
}

// parsea la accion Ej: suma/1/2 --> ['suma', 1, 2]
$params = explode('/', $action);

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'listar':
        $controller = new EmpleadoController();
        $controller->mostrarEmpleados();
        break;
    case 'detallar':
        $controller = new EmpleadoController();
        $id = $params[1];
        $controller->mostrarEmpleado($id);
        break;
    case 'mostrarFormularioEmpleado':
        $controller = new EmpleadoController();
        $controller->mostrarFormularioAlta();
        break;
    case 'agregar':
        $controller = new EmpleadoController();
        $controller->agregarEmpleado();
        break;
    case 'eliminar': // eliminar/:ID
        $controller = new EmpleadoController();
        $id = $params[1];
        $controller->eliminarEmpleado($id);
        break;
    /*case 'actualizar':
        $controller = new EmpleadoController();
        $id = $params[1];
        $controller->actualizarEmpleado($id);
        break;*/
    case 'login':
        $controller = new AuthController();
        $controller->login();
        break;
    case 'verify':
        $controller = new AuthController();
        $controller->verifyUser();
        break;
    case 'logout':
        $controller = new AuthController();
        $controller->logout();
        break;
    case 'nosotros':
        $controller = new AuthController();
        $controller->nosotros();
    default:
        header("HTTP/1.0 404 Not Found");
        $controller = new EmpleadoController();
        $controller->muestraError();
        break;
}

