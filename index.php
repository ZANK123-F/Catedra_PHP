<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Control de Cafetines UDB</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="estilos/principal.css">
</head>

<body>


  <header class="header bg-dark py-3">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-6">
          <img src="https://i1.sndcdn.com/artworks-xyXgbzrBXsJWRCbh-0ZyfBg-t500x500.jpg" alt="Logo" class="logo">
        </div>
        <div class="col-6 text-end flex-sm-row flex-sm-wrap">
          <div class="dropdown d-inline">
          
          <button class="btn btn-secondary" type="button" onclick="window.location.href='Comedores.php'">
           Cafeterias
          </button>



          </div>
          <button class="btn btn-secondary mx-2 flex-sm-wrap" href="#" >Sobre Nosotros</button>
          <button class="btn btn-secondary mx-2 flex-sm-wrap"  href="# ">Acerca de</button>
          <a class="btn btn-secondary mx-2 flex-sm-wrap" href="IniciarSesion.php">Iniciar Sesión</a>
        </div>
      </div>
    </div>
  </header>

<div class="container">
  <br>
  <h1 class="text-align text-center">Bienvenido a las cafeterias UDB <br> Selecciona una cafeteria </h1>
</div>
  <div class="container mt-5">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href="Cafeteria_1.php">
            <img src="https://phantom-marca.unidadeditorial.es/c9ede2e9ff24c60e07218519c3e67fe6/resize/828/f/jpg/assets/multimedia/imagenes/2022/09/16/16633380346741.jpg" class="d-block w-100" alt="cafeteria1">
          </a>
        </div>
        <div class="carousel-item">
          <a href="Cafeteria_2.php">
            <img src="https://image-cdn-ak.spotifycdn.com/image/ab67706c0000da842e65addae78c6ff159fd1f1d" class="d-block w-100" alt="cafeteria2">
          </a>
        </div>
        <div class="carousel-item">
          <a href="Cafeteria_3.php">
            <img src="https://assets.goal.com/v3/assets/bltcc7a7ffd2fbf71f5/bltf83b9578c2cc8c82/6426d520c43e6b68f5bd82cc/GOAL_-_Blank_WEB_-_Facebook_-_2023-03-31T134149.308.png?auto=webp&format=pjpg&width=3840&quality=60" class="d-block w-100" alt="cafeteria3">
          </a>
        </div>
        <div class="carousel-item">
          <a href="Cafeteria_4.php">
            <img src="https://www.eluniversal.com.mx/resizer/n3EFqWZ2GX3i-UZBFU09OF-2wHY=/1100x666/cloudfront-us-east-1.images.arcpublishing.com/eluniversal/ZYL23FNTHZE6PH3QWDX23NITHM.jpg" class="d-block w-100" alt="cafeteria4">
          </a>
        </div>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">siguiente</span>
      </button>
    </div>
  </div>

  <footer class="footer bg-dark py-4 mt-5">
    <div class="container text-center text-light">
      Página creada por los Tecnigods  de Ingeniería en Ciencias de la Computación dela UDB
      <br>
     <a href=""><i class="fab fa-facebook mx-2"></i></a> 
     <a href="">   <i class="fab fa-twitter mx-2"></i></a> 
     <a href="">    <i class="fab fa-instagram mx-2"></i></a> 
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>
