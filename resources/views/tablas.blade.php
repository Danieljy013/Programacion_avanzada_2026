<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tablas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="container py-5">

    <h1 class="mb-4">Sección Tablas 📊</h1>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Ciudad</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Ejemplo</td>
                <td>Prueba inicial</td>
                <td>Pasto</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ url('/') }}" class="btn btn-dark mt-3">Volver</a>

</body>
</html>