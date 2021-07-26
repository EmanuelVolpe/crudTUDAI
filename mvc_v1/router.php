<?php
include_once 'controllers/empleado.controller.php';
//include_once 'controllers/auth.controller.php';

// defino la base url para la construccion de links con urls semánticas
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

// parsea la accion Ej: suma/1/2 --> ['suma', 1, 2]
$params = explode('/', $action);

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home':
        $controller = new EmpleadoController();
        $controller->mostrarHome();
        break;
    case 'listar':
        $controller = new EmpleadoController();
        $controller->mostrarEmpleados();
        break;
    case 'detallar':
        $controller = new EmpleadoController();
        $id = $params[1];
        $controller->mostrarEmpleado($id);
        break;
    case 'mostrarformulario':
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
    case 'actualizar':
        $controller = new EmpleadoController();
        $id = $params[1];
        $controller->actualizarEmpleado($id);
        break;
    default:
        header("HTTP/1.0 404 Not Found");
        $controller = new EmpleadoController();
        $controller->muestraError();
        break;
    /*case 'ver':
        $controller = new TaskController();
        $id = $params[1];
        $controller->showDetail($id);
        break;
    case 'verify':
        $controller = new AuthContoller();
        $controller->loginUser();
        break;
    case 'logout':
        $controller = new AuthContoller();
        $controller->logout();
        break;
    */
}

