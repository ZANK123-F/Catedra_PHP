<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="stiles.css">
  <title>Reservacion de Productos</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />



  <link rel="stylesheet" href="/css/styles.css/img." />
  <style>
  .card-img-top {
    height: 200px;
    object-fit: cover;
  }
  </style>

</head>

<body style="background-color: #24303c;">

  <header class="container-fluid bg-dark position-sticky top-0">
    <ul class="nav nav-pills mb-3 py-3 container" id="pills-tab" role="tablist">
      <li class="nav-item text-primary" role="presentation">
        <a class="nav-link" id="pills-home-tab" href="index.php" role="tab" aria-controls="pills-home"
          aria-selected="true">Home</a>

      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="pills-profile-tab" href="Cafeteria_1.php" role="tab"
          aria-controls="pills-profile" aria-selected="false">Productos</a>
      </li>

    </ul>
  </header>

  <section class="form-register">
    <h4>Reserva de Productos</h4>
    <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
    <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">
    <input class="controls" type="text" name="correo" id="correo" placeholder="Ingrese su carnet">
    <input class="controls" type="date" name="fecha_reserva" id="fecha_reserva" placeholder="Fecha de Reserva">

    <input class="controls" type="text" name="productos_disponibles" id="productos_disponibles"
      placeholder="Productos disponibles">
    <button id="mostrarProductosBtn" class="botons">Ver Productos Disponibles</button>
    <button id="reservarProductosBtn" class="botons">Reservar Productos</button>


  </section>



  <div id="productosContainer" class="container" style="display: none;">
    <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">

      <div class="col d-flex justify-content-center mb-4">
        <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
          <h5 class="card-title pt-2 text-center text-primary"> Desayuno</h5>
          <img src="../img/platillo1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-black-50 description">Some quick example text to build on the card title and make
              up the bulk of the card's content.</p>
            <h5 class="text-primary">Precio: <span class="precio">$ 1.50</span></h5>
            <div class="d-grid gap-2">
              <button class="btn btn-primary button">Añadir a Carrito</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col d-flex justify-content-center mb-4">
        <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
          <h5 class="card-title pt-2 text-center text-primary">Sandwich</h5>
          <img src="../img/Sandwich.avif" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-black-50 description">Some quick example text to build on the card title and make
              up the bulk of the card's content.</p>
            <h5 class="text-primary">Precio: <span class="precio">$ 3</span></h5>
            <div class="d-grid gap-2">
              <button class="btn btn-primary button">Añadir a Carrito</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col d-flex justify-content-center mb-4">
        <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
          <h5 class="card-title pt-2 text-center text-primary">Sopa de pollo</h5>
          <img src="../img/Sopi.avif" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-black-50 description">Some quick example text to build on the card title and make
              up the bulk of the card's content.</p>
            <h5 class="text-primary">Precio: <span class="precio">$ 4.50</span></h5>
            <div class="d-grid gap-2">
              <button class="btn btn-primary button">Añadir a Carrito</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col d-flex justify-content-center mb-4">
        <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
          <h5 class="card-title pt-2 text-center text-primary">Lasaña</h5>
          <img src="../img/lasa.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-black-50 description">Some quick example text to build on the card title and make
              up the bulk of the card's content.</p>
            <h5 class="text-primary">Precio: <span class="precio">$ 8.90</span></h5>
            <div class="d-grid gap-2">
              <button class="btn btn-primary button">Añadir a Carrito</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col d-flex justify-content-center mb-4">
        <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
          <h5 class="card-title pt-2 text-center text-primary">Carne</h5>
          <img src="../img/carne.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-black-50 description">Some quick example text to build on the card title and make
              up the bulk of the card's content.</p>
            <h5 class="text-primary">Precio: <span class="precio">$ 9.75</span></h5>
            <div class="d-grid gap-2">
              <button class="btn btn-primary button">Añadir a Carrito</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col d-flex justify-content-center mb-4">
        <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
          <h5 class="card-title pt-2 text-center text-primary">Hamburgesa</h5>
          <img src="../img/hamburger.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-black-50 description">Some quick example text to build on the card title and make
              up the bulk of the card's content.</p>
            <h5 class="text-primary">Precio: <span class="precio">$ 0.99</span></h5>
            <div class="d-grid gap-2">
              <button class="btn btn-primary button">Añadir a Carrito</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col d-flex justify-content-center mb-4">
        <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
          <h5 class="card-title pt-2 text-center text-primary">Papas fritas</h5>
          <img src="../img/papas.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-black-50 description">Some quick example text to build on the card title and make
              up the bulk of the card's content.</p>
            <h5 class="text-primary">Precio: <span class="precio">$ 9.6</span></h5>
            <div class="d-grid gap-2">
              <button class="btn btn-primary button">Añadir a Carrito</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col d-flex justify-content-center mb-4">
        <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
          <h5 class="card-title pt-2 text-center text-primary">Frescos</h5>
          <img src="../img/frescos.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-black-50 description">Some quick example text to build on the card title and make
              up the bulk of the card's content.</p>
            <h5 class="text-primary">Precio: <span class="precio">$ 0.11</span></h5>
            <div class="d-grid gap-2">
              <button class="btn btn-primary button">Añadir a Carrito</button>
            </div>
          </div>
        </div>
      </div>


    </div>



    <script>
    function mostrarProductos() {
      const productosContainer = document.getElementById('productosContainer');
      productosContainer.style.display = 'block';
    }

    function reservarProductos() {
      const productosDisponibles = document.getElementById('productos_disponibles');

      alert('Su Reserva ha sido Guardada. Reclame su pedido en el comedor. Gracias');
      limpiarFormulario();
    }

    function limpiarFormulario() {
      document.getElementById('nombres').value = '';
      document.getElementById('apellidos').value = '';
      document.getElementById('correo').value = '';
      document.getElementById('fecha_reserva').value = '';
      document.getElementById('productos_disponibles').value = '';
    }


    const mostrarProductosBtn = document.getElementById('mostrarProductosBtn');
    mostrarProductosBtn.addEventListener('click', mostrarProductos);


    const reservarProductosBtn = document.getElementById('reservarProductosBtn');
    reservarProductosBtn.addEventListener('click', reservarProductos);

    function reservarProducto(nombreProducto) {
      const productosDisponibles = document.getElementById('productos_disponibles');
      let productosReservados = productosDisponibles.value;
      productosReservados += nombreProducto + ', ';
      productosDisponibles.value = productosReservados;
      alert('Su Reserva ha sido Guardada. Reclame su pedido en el comedor. Gracias');
    }

    const botonesReservar = document.querySelectorAll('.button');
    botonesReservar.forEach(button => {
      button.addEventListener('click', function() {
        const nombreProducto = this.closest('.card').querySelector('.card-title').textContent;
        reservarProducto(nombreProducto);
      });
    });
    </script>

    <script src="./js/scripts.js"></script>


</html>