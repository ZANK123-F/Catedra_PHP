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
      background-image: url('https://s1.1zoom.me/big0/612/Mushrooms_Bibimbap_Fried_egg_Bokeh_Sliced_food_593325_1280x853.jpg');
      /* Reemplaza 'tu-imagen-de-fondo.jpg' con la ruta de tu imagen */
      background-size: cover;
      /* Ajusta la imagen de fondo para cubrir todo el cuerpo */
      background-position: center;
      /* Centra la imagen de fondo */
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    
    .container {
      padding: 20px;
    }

    .card {
      background-color: rgba(255, 255, 255, 0.7);
      padding: 20px;
      border-radius: 10px;
    }

    h2 {
      text-align: center;
    }

    .btn-container {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    /* Estilo para los botones */
    .btn {
      width: 48%;
      border-width: 2px; /* Grosor del borde */
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
            <div class="btn-container">
              <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
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