<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Registros</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Fecha de nacimiento</th>
                <th>Telefono</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($InfoPersonal as $registro)
                <tr>
                    <td>{{ $registro->nombre }}</td>
                    <td>{{ $registro->correo }}</td>
                    <td>{{ $registro->fecha_nacimiento }}</td>
                    <td>{{ $registro->telefono }}</td>
                </tr>
            @endforeach
         </tbody>
      </table>
  </body>
</html>