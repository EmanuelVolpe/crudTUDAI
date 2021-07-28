{include 'header.tpl'}

<div class="container mt-5">
    <h1>{$titulo}</h1>
    <br>
    <form method="POST" action="agregarUsuario">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <label>Apellido</label>
                    <input type="text" class="form-control" name="apellido" placeholder="Apellido">
                </div>
                <div class="col-5">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                </div>
            </div>
            <div class="row mt-3 col-6">
                <label>E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="E-mail">
            </div>
            <div class="row mt-3 col-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Contraseña">
            </div>
        </div>
        <button type="submit" class="btn btn-success mt-3">Guardar</button>
    </form>
    <br>
</div>

{include 'footer.tpl'}