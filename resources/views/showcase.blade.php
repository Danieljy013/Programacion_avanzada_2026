<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HTML y CSS Showcase</title>

  <!-- ✅ Bootstrap CSS - solo una vez, versión 5.3.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- ✅ Tu CSS - solo una vez, DESPUÉS de Bootstrap -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

  <a class="skip-link" href="#contenido">Saltar al contenido principal</a>

  <!-- 🔥 HEADER -->
  <header class="bg-dark text-white py-4 shadow">
    <div class="container text-center">
      <h1 class="fw-bold">HTML Showcase</h1>
      <p class="lead">
        Un muestrario de etiquetas HTML + un CSS que no da pena 😌
      </p>

      <!-- Navbar Bootstrap -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded mt-3">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="#texto">Texto</a></li>
              <li class="nav-item"><a class="nav-link" href="#listas">Listas</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/multimedia') }}">Multimedia</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/tablas') }}">Tablas</a></li>
              <li class="nav-item"><a class="nav-link" href="#formularios">Formularios</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <main class="container my-5" id="contenido">

    <!-- 🔥 TEXTO -->
    <section class="card shadow-lg border-0 p-4 mb-5" id="texto">
      <h2 class="mb-3">1. Texto y estructura</h2>
      <p>
        Esto es un párrafo con <strong>strong</strong>,
        <em>em</em>, <mark>mark</mark>,
        <u>u</u> y <code>code</code>.
      </p>
      <blockquote class="blockquote">
        "La web se construye mejor cuando el HTML tiene significado."
      </blockquote>
      <pre class="bg-dark text-light p-3 rounded">
<code>function holaMundo() {
  console.log("Hola, GitHub!");
}</code>
      </pre>
    </section>

    <!-- 🔥 LISTAS -->
    <section class="card shadow-lg border-0 p-4 mb-5" id="listas">
      <h2 class="mb-3">2. Listas</h2>
      <div class="row">
        <div class="col-md-6">
          <h5>Lista desordenada</h5>
          <ul class="list-group">
            <li class="list-group-item">Elemento 1</li>
            <li class="list-group-item">Elemento 2</li>
            <li class="list-group-item">Elemento 3</li>
          </ul>
        </div>
        <div class="col-md-6">
          <h5>Lista ordenada</h5>
          <ol class="list-group list-group-numbered">
            <li class="list-group-item">Clonar repositorio</li>
            <li class="list-group-item">Crear rama</li>
            <li class="list-group-item">Hacer cambios</li>
          </ol>
        </div>
      </div>
    </section>

    <!-- 🔥 MULTIMEDIA -->
    <section class="card shadow-lg border-0 p-4 mb-5 text-center" id="multimedia">
      <h2 class="mb-3">3. Multimedia</h2>
      <img src="https://msmk.university/wp-content/uploads/2025/02/Foto25.jpg"
           class="img-fluid rounded shadow mb-3"
           alt="Imagen ejemplo">
      <div>
        <button class="btn btn-primary me-2">Botón</button>
        <a class="btn btn-outline-secondary" href="#formularios">Ir a formularios</a>
      </div>
    </section>

    <!-- 🔥 TABLAS -->
    <section class="card shadow-lg border-0 p-4 mb-5" id="tablas">
      <h2 class="mb-3">4. Tablas</h2>
      <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
          <thead class="table-dark">
            <tr>
              <th>Nombre</th>
              <th>Descripción</th>
              <th>Ciudad</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>Git status</code></td>
              <td>Muestra el estado del repositorio</td>
              <td>Pasto</td>
            </tr>
            <tr>
              <td>Ejemplo 1</td>
              <td>Ejemplo 1.1</td>
              <td>Pasto</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <!-- 🔥 FORMULARIOS -->
    <section class="card shadow-lg border-0 p-4 mb-5" id="formularios">
      <h2 class="mb-4">5. Formularios</h2>
      <form method="POST">
        @csrf
        <div class="mb-3">
          <label class="form-label">Nombre</label>
          <input type="text" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Contraseña</label>
          <input type="password" class="form-control" minlength="5" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Fecha</label>
          <input type="date" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Selección</label>
          <select class="form-select">
            <option>Elige una opción</option>
            <option>Opción 1</option>
            <option>Opción 2</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Mensaje</label>
          <textarea class="form-control" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
      </form>
    </section>

  </main>

  <!-- ✅ Bootstrap JS - solo una vez, al final del body -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>