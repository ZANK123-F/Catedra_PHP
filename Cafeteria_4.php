<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chalet Pupusas Locas</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      /* Establece la imagen de fondo */
      background-image: url('https://cdn.pixabay.com/photo/2017/06/06/22/37/italian-cuisine-2378729_1280.jpg');
      /* Ajusta la imagen para cubrir todo el cuerpo */
      background-size: cover;
      /* Centra la imagen */
      background-position: center;
      /* Fija la imagen para que no se desplace con el contenido */
      background-attachment: fixed;
      color: black; /* Color del texto */
      font-family:cursive/* Fuente del texto */
    }

    h1 {
      color: white;
      font-weight: bold;
    }

    .food-card {
      background-color: #F0D9B5;
      /* Color de fondo de la tarjeta */
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: transform 0.3s ease;
    }

    .food-card:hover {
      transform: translateY(-5px);
    }

    .food-card img {
      width: 100%;
      height: auto;
      border-radius: 10px 10px 0 0;
    }

    .food-card-body {
      padding: 20px;
    }

    /* Estilos del footer */
    footer {
      background-color: #FFE6DC;
      /* Color de fondo del footer */
      color: #6D4C41;
      /* Color del texto del footer */
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Chalet Pupusas Locas</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Chalets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-4">
    <h1 class="mb-4 text-center">Menu del chalet</h1>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="food-card">
          <a href="detalle_plato1.php">
            <img src="https://cdn.pixabay.com/photo/2015/07/12/14/26/coffee-842020_1280.jpg?text=Plato+1" class="img-fluid" alt="Plato 1">
          </a>
          <div class="food-card-body">
            <h5 class="card-title">CAFE CON PAN</h5>
            <p class="card-text">Una exquisita mezcla de granos de café seleccionados cuidadosamente y una porcion de pan..</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="food-card">
          <a href="detalle_plato.html">
            <img src="https://cdn.pixabay.com/photo/2017/09/02/13/38/burger-2707320_1280.jpg?text=Plato+2" class="img-fluid" alt="Plato 2">
          </a>
          <div class="food-card-body">
            <h5 class="card-title">Hamburguesa</h5>
            <p class="card-text">Descripción del Plato 2.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="food-card">
          <a href="detalle_plato.html">
            <img src="https://cdn.pixabay.com/photo/2024/01/06/16/48/ai-generated-8491685_1280.jpg?text=Plato+3" class="img-fluid" alt="Plato 3">
          </a>
          <div class="food-card-body">
            <h5 class="card-title">Plato 3</h5>
            <p class="card-text">Descripción del Plato 3.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="food-card">
          <a href="detalle_plato.html">
            <img src="https://via.placeholder.com/300x200.png?text=Plato+4" class="img-fluid" alt="Plato 4">
          </a>
          <div class="food-card-body">
            <h5 class="card-title">Plato 4</h5>
            <p class="card-text">Descripción del Plato 4.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="food-card">
          <a href="detalle_plato.html">
            <img src="https://via.placeholder.com/300x200.png?text=Plato+5" class="img-fluid" alt="Plato 5">
          </a>
          <div class="food-card-body">
            <h5 class="card-title">Plato 5</h5>
            <p class="card-text">Descripción del Plato 5.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="food-card">
          <a href="detalle_plato.html">
            <img src="https://via.placeholder.com/300x200.png?text=Plato+6" class="img-fluid" alt="Plato 6">
          </a>
          <div class="food-card-body">
            <h5 class="card-title">Plato 6</h5>
            <p class="card-text">Descripción del Plato 6.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <div class="container">
      <p>&copy; 2024 Compra de Chalet</p>
    </div>
  </footer>

  <!-- Bootstrap JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>