<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#bla" />
  <title>Ventas de Alimentos</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

  <link rel="stylesheet" href="css/styles.css/img." />
  <style>
    .card-img-top {
      height: 200px;
      object-fit: cover;
    }
  </style>
</head>

<body>
<header class="container-fluid bg-dark position-sticky top-0">
    <ul class="nav nav-pills mb-3 py-3 container" id="pills-tab" role="tablist">
        <li class="nav-item text-primary" role="presentation">
            <a class="nav-link" id="pills-home-tab" href="index.php" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Productos</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" href="Reservacion3.php" role="tab" aria-controls="reserva" aria-selected="false">Reservar Evento de Producto</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Carrito</a>
        </li>
    </ul>
</header>

  <div class="alert container position-sticky top-0 alert-primary hide" role="alert">
    Producto Añadido al carrito!
  </div>
  
  <div class="alert container position-sticky top-0 alert-danger remove" role="alert">
    Producto removido!
  </div>

  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
      1
    </div>
    <div class="tab-pane fade show active container" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
      <h2 class="h4 m-4 text-white">Cafeteria 4</h2>
      <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
        <div class="col d-flex justify-content-center mb-4">
          <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
            <h5 class="card-title pt-2 text-center text-primary">Café & Pan Fresco - Solo $1.50</h5>
            <img src="https://cdn.pixabay.com/photo/2015/07/12/14/26/coffee-842020_1280.jpg?text=Plato+1" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-black-50 description">Disfruta de un delicioso café y pan fresco por solo $1.50. ¡El desayuno ideal para comenzar tu día!</p>
              <h5 class="text-primary">Precio: <span class="precio">$ 1.50</span></h5>
              <div class="d-grid gap-2">
                <button class="btn btn-primary button">Añadir a Carrito</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col d-flex justify-content-center mb-4">
          <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
            <h5 class="card-title pt-2 text-center text-primary">Hamburguesa Clásica - $1.25</h5>
            <img src="https://cdn.pixabay.com/photo/2017/09/02/13/38/burger-2707320_1280.jpg?text=Plato+2" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-black-50 description">¡Puro sabor a solo $1.25! Disfruta de nuestra hamburguesa en cualquier momento.</p>
              <h5 class="text-primary">Precio: <span class="precio">$ 1.25</span></h5>
              <div class="d-grid gap-2">
                <button class="btn btn-primary button">Añadir a Carrito</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col d-flex justify-content-center mb-4">
          <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
            <h5 class="card-title pt-2 text-center text-primary">Combo Pupusas & Café - $1.75</h5>
            <img src="./img/cafereria4_producto3.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-black-50 description">Tres pupusas calientes y un café por solo $1.75. ¡El sabor de El Salvador en tu paladar!</p>
              <h5 class="text-primary">Precio: <span class="precio">$ 1.75</span></h5>
              <div class="d-grid gap-2">
                <button class="btn btn-primary button">Añadir a Carrito</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col d-flex justify-content-center mb-4">
          <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
            <h5 class="card-title pt-2 text-center text-primary">Combo Hotdog & Soda - $2.00</h5>
            <img src="./img/cafeteria4_producto4.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-black-50 description">¡Un clásico que nunca falla! Disfruta de un hotdog completo y una soda refrescante por solo $2.00.</p>
              <h5 class="text-primary">Precio: <span class="precio">$ 2.00</span></h5>
              <div class="d-grid gap-2">
                <button class="btn btn-primary button">Añadir a Carrito</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col d-flex justify-content-center mb-4">
          <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
            <h5 class="card-title pt-2 text-center text-primary">Almuerzo Carne Asada - $3.25</h5>
            <img src="./img/cafeteria4_producto5.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-black-50 description">Disfruta de un almuerzo completo con carne asada, arroz, ensalada fresca y una bebida por solo $3.25.</p>
              <h5 class="text-primary">Precio: <span class="precio">$ 3.25</span></h5>
              <div class="d-grid gap-2">
                <button class="btn btn-primary button">Añadir a Carrito</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col d-flex justify-content-center mb-4">
          <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
            <h5 class="card-title pt-2 text-center text-primary">Desayuno Típico - $2.00</h5>
            <img src="./img/cafereria4_producto6.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-black-50 description">Un desayuno tradicional con huevo, frijoles molidos y plátano por solo $2.00.</p>
              <h5 class="text-primary">Precio: <span class="precio">$ 2.00</span></h5>
              <div class="d-grid gap-2">
                <button class="btn btn-primary button">Añadir a Carrito</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col d-flex justify-content-center mb-4">
          <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
            <h5 class="card-title pt-2 text-center text-primary">Trio de Panqueques - $1.75</h5>
            <img src="./img/cafereria4_producto7.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-black-50 description">Tres panqueques dorados y esponjosos a un precio dulce de solo $1.75.</p>
              <h5 class="text-primary">Precio: <span class="precio">$ 1.75</span></h5>
              <div class="d-grid gap-2">
                <button class="btn btn-primary button">Añadir a Carrito</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col d-flex justify-content-center mb-4">
          <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
            <h5 class="card-title pt-2 text-center text-primary">Variedad de Sodas en Lata - $0.80</h5>
            <img src="./img/cafereria4_producto8.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-black-50 description">Refresca tu día con una soda en lata, elige tu sabor favorito por solo $0.80.</p>
              <h5 class="text-primary">Precio: <span class="precio">$ 0.80</span></h5>
              <div class="d-grid gap-2">
                <button class="btn btn-primary button">Añadir a Carrito</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade carrito" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
      <br>
      <table class="table table-dark table-hover">
        <thead>
          <tr class="text-primary">
            <th scope="col">#</th>
            <th scope="col">Productos</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
          </tr>
        </thead>
        <tbody class="tbody">



        </tbody>
      </table>
      <br><br>
      <div class="row mx-4">
        <div class="col">
          <h3 class="itemCartTotal text-black">Total: 0</h3>
        </div>
        <div class="col d-flex justify-content-end">
          <button class="btn btn-success">COMPRAR</button>
        </div>
      </div>

    </div>
  </div>
  <footer class="bg-dark p-3 mt-5">
    <p class="text-center m-0 text-muted">Universidad Don bosco
    </p>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="./js/scripts.js"></script>
</body>

</html>