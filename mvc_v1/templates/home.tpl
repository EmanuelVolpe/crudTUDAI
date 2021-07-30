{include 'header.tpl'}

<div class="container mt-5">
    <h1>{$titulo}</h1>
    <div class="jumbotron">
        <div class="row">
            <p class="lead">Ya sos usuario</p>
            <a class="btn btn-success btn-sm" href="login">Login</a>
        </div>
        <br>
        <div class="row">
            <p class="lead">Usuario nuevo?</p>
            <a class="btn btn-danger btn-sm" href="mostrarFormularioUser">Alta</a>
        </div>
    </div>
</div>

{include 'footer.tpl'}

