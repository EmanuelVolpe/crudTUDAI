{include 'header.tpl'}

<br>
<h1>{$titulo}</h1>
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
    {foreach from=$empleados item=empleado}
        <tr>
            <td>{$empleado->apellido}</td>
            <td>{$empleado->nombre}</td>
            <td>{$empleado->email}</td>
            <td><a href='actualizar/{$empleado->id}' class='btn btn-outline-success btn-sm'>Editar</a> - <a href='eliminar/{$empleado->id}' class='btn btn-outline-danger btn-sm'>Borrar</a> - <a href='detallar/{$empleado->id}' class='btn btn-outline-warning btn-sm'>Detalles</a>
        </tr>
    {/foreach}
    </tbody>
</table>

{include 'footer.tpl'}