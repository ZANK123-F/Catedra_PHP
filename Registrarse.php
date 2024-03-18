<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Registro</title>
  <link rel="stylesheet" href="estilos/registro.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      margin: 0; /* Elimina el margen predeterminado del cuerpo */
      padding: 0; /* Elimina el relleno predeterminado del cuerpo */
      background-image: url('https://s1.1zoom.me/big0/612/Mushrooms_Bibimbap_Fried_egg_Bokeh_Sliced_food_593325_1280x853.jpg'); /* Reemplaza 'ruta/de/tu/imagen.jpg' con la ruta de tu imagen */
      background-size: cover; /* Ajusta la imagen de fondo para cubrir todo el cuerpo */
      background-position: center; /* Centra la imagen de fondo */
    }

    .container {
      padding: 20px; /* Añade un poco de espacio alrededor del formulario */
    }

    .card {
      background-color: rgba(255, 255, 255, 0.7); /* Añade un fondo semi-transparente al formulario */
      padding: 20px;
      border-radius: 10px;
    }

    h2 {
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card shadow-lg p-4">
          <h2 class="mb-4">Registro de Usuario</h2>
          <form action="Registrarse.php" method="post">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
              <label for="apellido" class="form-label">Apellido:</label>
              <input type="text" class="form-control" id="apellido" name="apellido" required>
            </div>
            <div class="mb-3">
              <label for="rol" class="form-label">Rol en la UDB:</label>
              <select class="form-select" id="rol" name="rol" required>
                <option value="">Seleccionar...</option>
                <option value="docente">Docente</option>
                <option value="empleado">Empleado</option>
                <option value="estudiante">Estudiante</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="correo" class="form-label">Correo Electrónico:</label>
              <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
            <div class="mb-3">
              <label for="contrasenia" class="form-label">Contraseña:</label>
              <input type="password" class="form-control" id="contrasenia" name="contrasenia" required>
            </div>
            <div class="mb-3">
              <label for="confirmar_contrasenia" class="form-label">Confirmar Contraseña:</label>
              <input type="password" class="form-control" id="confirmar_contrasenia" name="confirmar_contrasenia" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrarse</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>