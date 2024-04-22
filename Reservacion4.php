<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Reservacion de Productos</title>
  <link rel="stylesheet" href="stiles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
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
      <a class="nav-link" id="pills-home-tab" href="index.php" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link active" id="pills-profile-tab" href="Cafeteria_4.php" role="tab" aria-controls="pills-profile" aria-selected="false">Productos</a>
    </li>
  </ul>
</header>

<section class="form-register">
  <h4>Reserva de Productos</h4>
  <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
  <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">
  <input class="controls" type="text" name="correo" id="correo" placeholder="Ingrese su correo">
  <input class="controls" type="date" name="fecha_reserva" id="fecha_reserva" placeholder="Fecha de Reserva">
  <input class="controls" type="text" name="productos_disponibles" id="productos_disponibles" placeholder="Productos disponibles">
  <button id="mostrarProductosBtn" class="botons">Ver Productos Disponibles</button>
  <button id="reservarProductosBtn" class="botons">Reservar Productos</button>
</section>




  <div id="productosContainer" class="container" style="display: none;">
   <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">

<div class="col d-flex justify-content-center mb-4">
  <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
    <h5 class="card-title pt-2 text-center text-primary"> Desayuno</h5>
    <img src="./img/desayuno.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text text-black-50 description">Un delicioso desayuno para empezar el día con energía..</p>
      <h5 class="text-primary">Precio: <span class="precio">$ 3.50</span></h5>
      <div class="d-grid gap-2">
      <button  class="btn btn-primary button">Reservar</button>
    </div>
    </div>
  </div>
</div>
<div class="col d-flex justify-content-center mb-4">
  <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
    <h5 class="card-title pt-2 text-center text-primary">Sandwich</h5>
    <img src="./img/sadwich1.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text text-black-50 description">Un delicioso sandwich con ingredientes frescos.b</p>
      <h5 class="text-primary">Precio: <span class="precio">$ 1.00</span></h5>
      <div class="d-grid gap-2">
      <button  class="btn btn-primary button">Reservar</button>
    </div>
    </div>
  </div>
</div>
<div class="col d-flex justify-content-center mb-4">
  <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
    <h5 class="card-title pt-2 text-center text-primary">Burritos</h5>
    <img src="./img/burrito.webp" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text text-black-50 description">Deliciosos burritos mexicanos rellenos de carne y frijoles.</p>
      <h5 class="text-primary">Precio: <span class="precio">$ 3.50</span></h5>
      <div class="d-grid gap-2">
      <button  class="btn btn-primary button">Reservar</button>
    </div>
    </div>
  </div>
</div>
<div class="col d-flex justify-content-center mb-4">
  <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
    <h5 class="card-title pt-2 text-center text-primary">Lasaña</h5>
    <img src="./img/lasagna.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text text-black-50 description">Deliciosa lasaña casera con capas de pasta, carne molida, salsa de tomate y queso derretido.</p>
      <h5 class="text-primary">Precio: <span class="precio">$ 3.00</span></h5>
      <div class="d-grid gap-2">
      <button  class="btn btn-primary button">Reservar</button>
    </div>
    </div>
  </div>
</div>
<div class="col d-flex justify-content-center mb-4">
  <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
    <h5 class="card-title pt-2 text-center text-primary">Carne</h5>
    <img src="./img/carne.webp" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text text-black-50 description">Delicioso filete de carne a la parrilla, perfectamente sazonado y jugoso.</p>
      <h5 class="text-primary">Precio: <span class="precio">$ 4.00</span></h5>
      <div class="d-grid gap-2">
      <button  class="btn btn-primary button">Reservar</button>
    </div>
    </div>
  </div>
</div>
<div class="col d-flex justify-content-center mb-4">
  <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
    <h5 class="card-title pt-2 text-center text-primary">Hamburguesa</h5>
    <img src="./img/hamburguesa.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text text-black-50 description">Deliciosa hamburguesa casera con carne de primera calidad y aderezos frescos.</p>
      <h5 class="text-primary">Precio: <span class="precio">$ 2.50</span></h5>
      <div class="d-grid gap-2">
      <button  class="btn btn-primary button">Reservar</button>
    </div>
    </div>
  </div>
</div>
<div class="col d-flex justify-content-center mb-4">
  <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
    <h5 class="card-title pt-2 text-center text-primary">Papas fritas</h5>
    <img src="./img/papas.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text text-black-50 description">Crujientes papas fritas doradas y sazonadas a la perfección.</p>
      <h5 class="text-primary">Precio: <span class="precio">$ 1.25</span></h5>
      <div class="d-grid gap-2">
      <button  class="btn btn-primary button">Reservar</button>
    </div>
    </div>
  </div>
</div>
<div class="col d-flex justify-content-center mb-4">
  <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
    <h5 class="card-title pt-2 text-center text-primary">Frescos</h5>
    <img src="./img/frescos1.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text text-black-50 description">Refrescantes bebidas naturales hechas con frutas frescas y deliciosas.</p>
      <h5 class="text-primary">Precio: <span class="precio">$ 0.50</span></h5>
      <div class="d-grid gap-2">
      <button  class="btn btn-primary button">Reservar</button>
    </div>
    </div>
  </div>
</div>

<div class="col d-flex justify-content-center mb-4">
  <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
    <h5 class="card-title pt-2 text-center text-primary">Sodas</h5>
    <img src="./img/sodas.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text text-black-50 description">Refrescantes bebidas carbonatadas en una variedad de sabores.</p>
      <h5 class="text-primary">Precio: <span class="precio">$ 1.00</span></h5>
      <div class="d-grid gap-2">
      <button  class="btn btn-primary button">Reservar</button>
    </div>
    </div>
  </div>
</div>

<div class="col d-flex justify-content-center mb-4">
  <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
    <h5 class="card-title pt-2 text-center text-primary">Pupusas</h5>
    <img src="./img/pupusas.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text text-black-50 description">Deliciosas pupusas rellenas de queso, frijoles o carne, acompañadas de curtido y salsa de tomate.</p>
      <h5 class="text-primary">Precio: <span class="precio">$ 0.50</span></h5>
      <div class="d-grid gap-2">
      <button  class="btn btn-primary button">Reservar</button>
    </div>
    </div>
  </div>
</div>

<div class="col d-flex justify-content-center mb-4">
  <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
    <h5 class="card-title pt-2 text-center text-primary">Tacos</h5>
    <img src="./img/tacos.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text text-black-50 description">Deliciosos tacos mexicanos de carne asada, pollo, cerdo o pescado.</p>
      <h5 class="text-primary">Precio: <span class="precio">$ 3.50</span></h5>
      <div class="d-grid gap-2">
      <button  class="btn btn-primary button">Reservar</button>
    </div>
    </div>
  </div>
</div>

<div class="col d-flex justify-content-center mb-4">
  <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
    <h5 class="card-title pt-2 text-center text-primary">Tortas</h5>
    <img src="./img/tortas.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text text-black-50 description">Deliciosas tortas preparadas con pan fresco, rellenas de carne, pollo, jamón, queso, aguacate, lechuga, y tomate.</p>
      <h5 class="text-primary">Precio: <span class="precio">$ 2.00</span></h5>
      <div class="d-grid gap-2">
      <button  class="btn btn-primary button">Reservar</button>
    </div>
    </div>
  </div>
</div>

</div>
</div>



<script>
  // Función para mostrar los productos disponibles
  function mostrarProductos() {
    const productosContainer = document.getElementById('productosContainer');
    productosContainer.style.display = 'block';
  }

  // Función para reservar productos
  function reservarProductos() {
    const nombres = document.getElementById('nombres').value;
    const apellidos = document.getElementById('apellidos').value;
    const correo = document.getElementById('correo').value;
    const fechaReserva = document.getElementById('fecha_reserva').value;
    const productosDisponibles = document.getElementById('productos_disponibles').value;

    // Validación de campos vacíos
    if (!nombres || !apellidos || !correo || !fechaReserva || !productosDisponibles) {
      alert('Llenar los campos solicitados para completar la reserva');
    } else {
      // Aquí puedes realizar alguna acción con los datos del formulario si es necesario
      alert('Su Reserva ha sido Guardada. Reclame su pedido en el comedor. Gracias');
      limpiarFormulario();
    }
  }

  // Función para limpiar el formulario
  function limpiarFormulario() {
    document.getElementById('nombres').value = '';
    document.getElementById('apellidos').value = '';
    document.getElementById('correo').value = '';
    document.getElementById('fecha_reserva').value = '';
    document.getElementById('productos_disponibles').value = '';
  }

  // Agregar un event listener al botón "Ver Productos Disponibles"
  const mostrarProductosBtn = document.getElementById('mostrarProductosBtn');
  mostrarProductosBtn.addEventListener('click', mostrarProductos);

  // Agregar un event listener al botón "Reservar Productos"
  const reservarProductosBtn = document.getElementById('reservarProductosBtn');
  reservarProductosBtn.addEventListener('click', reservarProductos);

  // Función para reservar un producto (simulada)
  function reservarProducto(nombreProducto) {
    const productosDisponibles = document.getElementById('productos_disponibles');
    let productosReservados = productosDisponibles.value;
    productosReservados += nombreProducto + ', ';
    productosDisponibles.value = productosReservados;
    alert('su pedido a sido agregado a los productos reservados');
  }

  // Agregar event listeners a todos los botones de "Reservar"
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
