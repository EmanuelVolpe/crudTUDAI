{include 'header.tpl'}


<div class="container mt-5">
    <h1>{$titulo}</h1>
    <br>
    <form method="POST" action="verify">
        <div class="col-4">
            <div class="row">
                <label>E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="E-mail">
            </div>
            <div class="row mt-2">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Contraseña">
            </div>
        </div>
        <button type="submit" class="btn btn-success mt-3">Ingresar</button>
    </form>
</div>

{include 'footer.tpl'}

