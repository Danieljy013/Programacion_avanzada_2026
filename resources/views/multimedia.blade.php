<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Multimedia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="container py-5">

<h1 class="text-center mb-4">Plataforma Multimedia 🎬</h1>

<!-- FORMULARIO -->
<div class="card mb-4">
    <div class="card-header bg-dark text-white">
        Registrar Video
    </div>
    <div class="card-body">
        <form action="/multimedia" method="POST">
            @csrf

            <div class="mb-3">
                <input type="text" name="estudiante" class="form-control" placeholder="Nombre del estudiante" required>
            </div>

            <div class="mb-3">
                <input type="text" name="curso" class="form-control" placeholder="Curso (Ej: 10A)" required>
            </div>

            <div class="mb-3">
                <input type="text" name="titulo" class="form-control" placeholder="Título del video" required>
            </div>

            <div class="mb-3">
                <input type="text" name="url" class="form-control" placeholder="URL de YouTube" required>
            </div>

            <button type="submit" class="btn btn-dark w-100">
                Guardar Video
            </button>
        </form>
    </div>
</div>

<!-- TABLA -->
<div class="card">
    <div class="card-header bg-secondary text-white">
        Videos Registrados
    </div>
    <div class="card-body p-0">
        <table class="table table-striped text-center mb-0">
            <thead class="table-dark">
                <tr>
                    <th>Estudiante</th>
                    <th>Curso</th>
                    <th>Título</th>
                    <th>Video</th>
                </tr>
            </thead>
            <tbody>
                @forelse($videos as $video)
                <tr>
                    <td>{{ $video->estudiante }}</td>
                    <td>{{ $video->curso }}</td>
                    <td>{{ $video->titulo }}</td>
                    <td>
                        <a href="{{ $video->url }}" target="_blank" class="btn btn-sm btn-primary">
                            ▶ Ver
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4">No hay videos registrados</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<a href="{{ url('/') }}" class="btn btn-secondary mt-4">
    Volver al inicio
</a>

</body>
</html>