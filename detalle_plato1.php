<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Plato 1</title>
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
            color: black;
            /* Color del texto */
        }

        h1 {
            color: white;
        }

        .food-card {
            background-color: #F0D9B5;
            /* Color de fondo de la tarjeta */
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
            height: auto;
            max-height: 400px;
            /* Máximo altura para evitar que el div crezca demasiado */
            width: 95%;
            /* Ancho del div ajustado */
            margin: auto;
            /* Centrar el div */
        }

        .food-card:hover {
            transform: translateY(-5px);
        }

        .food-card img {
            width: 50%;
            height: auto;
            border-radius: 10px 0 0 10px;
        }

        .food-card-body {
            padding: 20px;
            overflow-y: auto;
            /* Permite desplazamiento vertical si el contenido excede la altura máxima */
        }

        footer {
            background-color: #FFE6DC;
            color: #6D4C41;
            position: absolute;
            bottom: 0;
            width: 100%;
            margin-top: 20px;
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
        <h1 class="mb-4 text-center">Cafe con pan</h1>
        <div class="row justify-content-center">
            <div class="col-md-8 mb-4">
                <div class="food-card d-flex align-items-center justify-content-center">
                    <?php
                    $plato1 = array(
                        'nombre' => 'CAFE CON PAN',
                        'descripcion' => 'Una exquisita mezcla de granos de café seleccionados cuidadosamente y una porcion de pan.',
                        'disponibilidad' => 'Disponible todos los días',
                        'cantidad' => 'Ilimitada',
                        'precio' => '$1.75 por combo',
                        'horario_disponibilidad' => 'Desde la apertura hasta el cierre',
                    );
                    ?>
                    <img src="https://cdn.pixabay.com/photo/2015/07/12/14/26/coffee-842020_1280.jpg" class="img-fluid" alt="<?php echo $plato1['nombre']; ?>">
                    <div class="food-card-body ml-3">
                        <h5 class="card-title"><?php echo $plato1['nombre']; ?></h5>
                        <p class="card-text"><?php echo $plato1['descripcion']; ?></p>
                        <p><strong>Disponibilidad:</strong> <?php echo $plato1['disponibilidad']; ?></p>
                        <p><strong>Cantidad:</strong> <?php echo $plato1['cantidad']; ?></p>
                        <p><strong>Horario de Disponibilidad:</strong> <?php echo $plato1['horario_disponibilidad']; ?></p>
                        <p><strong>Precio:</strong> <?php echo $plato1['precio']; ?></p>
                        <button class="btn btn-primary">Comprar</button>
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