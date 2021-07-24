<?php
require_once('templates/header.php');
?>

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
        <?php
        foreach ($empleados as $empleado) {
            echo '<tr>
                    <td>' . $empleado->id . '</td>
                    <td>' . $empleado->apellido . '</td>
                    <td>' . $empleado->nombre . '</td>
                    <td>' . $empleado->email . '</td>
                    <td><button type="button" class="btn btn-outline-success btn-sm">Editar</button> - <button type="button" class="btn btn-outline-danger btn-sm">Borrar</button>
                </tr>';
        };
        ?>
    </tbody>
</table>

<?php
require_once('templates/footer.php');
?>