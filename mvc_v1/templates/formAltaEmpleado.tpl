{include 'header.tpl'}

<div class="container mt-5">
    <h1>{$titulo}</h1>
    <br>
    <!-- Content here -->
    <form method="post"  action="agregar" enctype="multipart/form-data">
        <div class="row">
            <div class="col form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
            </div>
            <div class="col form-group">
                <label>Apellido</label>
                <input type="text" class="form-control" name="apellido" placeholder="Apellido">
            </div>
            <div class="col form-group">
                <label>E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="E-mail">
            </div>
            <div class="col form-group">
                <label>Imagen</label>
                <input type="file" name="input_name" id="imageToUpload">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Enviar</button>
    </form>
</div>

{include 'footer.tpl'}

