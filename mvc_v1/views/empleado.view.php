<?php
require_once('./models/empleado.model.php');

class EmpleadoView {

    function showHome(){
        require_once('templates/header.php');
        echo
        '<div class="jumbotron">
          <h1 class="display-4">PAGINA DE INICIO</h1>
          <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
          <hr class="my-4">
          <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        </div>';
        require_once('templates/footer.php');
    }

    function showFormulario(){
        require_once('templates/header.php');
        require_once('templates/formAltaEmpleado.php');
        require_once('templates/footer.php');
    }

    function showEmpleado($empleado){
        require_once('templates/header.php');

        echo '<br>
             <h1>Detalle de Empleado</h1>
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
                    <td>' . $empleado->id .       '</td>
                    <td>' . $empleado->apellido . '</td>
                    <td>' . $empleado->nombre .   '</td>
                    <td>' . $empleado->email .    '</td>
                    <td><a href ='.BASE_URL.'listar class="btn btn-outline-success btn-sm">Volver</a></td>
                </tr>
            </tbody>
        </table>';
        require_once('templates/footer.php');
    }

    function showEmpleados($empleados){

        require_once('templates/header.php');

        echo ' <br><h1>Lista de Empleados</h1>
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
            <tbody>';
        foreach ($empleados as $empleado) {
            echo "<tr>
                        <td>" . $empleado->id . "</td>
                        <td>" . $empleado->apellido . "</td>
                        <td>" . $empleado->nombre . "</td>
                        <td>" . $empleado->email . "</td>
                        <td><a href='actualizar/$empleado->id' class='btn btn-outline-success btn-sm'>Editar</a> - <a href='eliminar/$empleado->id' class='btn btn-outline-danger btn-sm'>Borrar</a> - <a href='detallar/$empleado->id' class='btn btn-outline-warning btn-sm'>Detalles</a>
                    </tr>";
        };

        echo '</tbody></table>';
        require_once('templates/footer.php');
    }
}


