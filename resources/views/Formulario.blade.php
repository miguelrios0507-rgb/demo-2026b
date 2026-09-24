<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Formulario horoscopo</h1>
    <form action="Recibir-formulario" method="post">
    <br>
    <div class="mb-3">
        <label for="Nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="Nombre" name="Nombre">
    </div>

    <br>
    <div class="mb-3">
        <label for="Fecha" class="form-label">Fecha</label>
        <input type="date" class="form-control" id="Fecha" name="Fecha">
    </div>

    <br>
    <div class="mb-3">
        <label for="Correo" class="form-label">Correo</label>
        <input type="email" class="form-control" id="Correo" name="Correo">
    </div>

    <br>
    <div class="mb-3">
        <label for="Telefono" class="form-label">Telefono</label>
        <input type="text" class="form-control" id="Telefono" name="Telefono">
    </div>

    <br>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</body>
</html>