{include 'header.tpl'}

<br>
<h1>{$titulo}</h1>
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
        <td>{$empleado->id}</td>
        <td>{$empleado->apellido}</td>
        <td>{$empleado->nombre}</td>
        <td>{$empleado->email}</td>
        <td><a href ={BASE_URL}listar class="btn btn-outline-success btn-sm">Volver</a></td>
    </tr>
    </tbody>
</table>';

{include 'footer.tpl'}

