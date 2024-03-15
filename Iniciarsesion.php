<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de Sesión</title>
  <link rel="stylesheet" href="estilos/registro.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #eed393f6;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    
  </style>
</head>

<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card shadow-lg p-4">
          <h2 class="mb-4">Inicio de Sesión</h2>
          <form action="IniciarSesion.php" method="post">
            <div class="mb-3">
              <label for="correo" class="form-label">Correo Electrónico:</label>
              <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
            <div class="mb-3">
              <label for="contrasenia" class="form-label">Contraseña:</label>
              <input type="password" class="form-control" id="contrasenia" name="contrasenia" required>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            <div class="d-flex justify-content-end ">
          <a href="Registrarse.php" class="btn btn-secondary">Registrarse</a>
            </div>
          </form>
        </div>
       
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
