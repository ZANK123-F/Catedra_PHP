<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Registro</title>
  <link rel="stylesheet" href="estilos/registro.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<style>
     body {
      background-color: #eed393f6;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
  </style>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card shadow-lg p-4">
          <h2 class="mb-4    text-center " >Registro de Usuario</h2>
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
