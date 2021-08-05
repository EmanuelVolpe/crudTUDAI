{include 'header.tpl'}

<br>

<h1>{$titulo}</h1>

<div class="container-fluid">
<table class="table table-striped table-bordered text-center">
    <thead class="table-dark">
    <tr>
        <th scope="col">Apellido</th>
        <th scope="col">Nombre</th>
        <th scope="col">E-mail</th>
        <th scope="col">Imagen</th>
        {if isset($smarty.session.EMAIL_USER)}
            <th scope="col">Accion</th>
        {/if}
    </tr>
    </thead>
    <tbody>
    {foreach from=$empleados item=empleado}
        <tr>
            <td>{$empleado->apellido}</td>
            <td>{$empleado->nombre}</td>
            <td>{$empleado->email}</td>
            {if isset($smarty.session.EMAIL_USER)}
                <td><img src='{$empleado->imagen}' width="100" height="100"></td>
            {/if}
            {if isset($smarty.session.EMAIL_USER)}
                <td><a href='actualizar/{$empleado->id}' class='btn btn-outline-success btn-sm'>Editar</a> -
                    <a href='eliminar/{$empleado->id}' class='btn btn-outline-danger btn-sm'>Borrar</a> -
                    <a href='detallar/{$empleado->id}' class='btn btn-outline-warning btn-sm'>Detalles</a>
                </td>
            {/if}
        </tr>
    {/foreach}
    </tbody>
</table>
</div>

{include 'footer.tpl'}