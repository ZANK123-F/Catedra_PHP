<?php
include 'Conexion.php';

function obtenerProductos() {
    // Crear una nueva instancia de la clase Conexion
    $conexion = new Conexion();

    // Consultar los productos en la base de datos
    $sql = "SELECT * FROM productos";
    $result = $conexion->conn->query($sql);

    // Verificar si hay resultados
    if ($result->num_rows > 0) {
        // Inicializar una variable para almacenar el HTML de los productos
        $productosHTML = '';

        // Iterar sobre los resultados y construir el HTML para cada producto
        while ($row = $result->fetch_assoc()) {
            $titulo = $row['titulo'];
            $imagen = $row['imagen'];
            $descripcion = $row['descripcion'];
            $precio = $row['precio'];

            // Construir el HTML para el producto
            $productoHTML = "
                <div class='col d-flex justify-content-center mb-4'>
                    <div class='card shadow mb-1 bg-ligth rounded' style='width: 20rem;'>
                        <h5 class='card-title pt-2 text-center text-primary'>$titulo</h5>
                        <img src='$imagen' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <p class='card-text text-black-50 description'>$descripcion</p>
                            <h5 class='text-primary'>Precio: <span class='precio'>$ $precio</span></h5>
                            <div class='d-grid gap-2'>
                                <button class='btn btn-primary button'>Añadir a Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
            ";

            // Concatenar el HTML del producto al HTML general de productos
            $productosHTML .= $productoHTML;
        }

        // Retornar el HTML de todos los productos
        return $productosHTML;
    } else {
        // Si no hay resultados, retornar un mensaje indicando que no hay productos
        return "No se encontraron productos.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#bla" />
  <title>Ventas de Alimentos</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

  <link rel="stylesheet" href="/css/styles.css/img." />
  <style>
    .card-img-top {
      height: 200px;
      object-fit: cover;
    }
    
  .button {
    width: 100%; /* Ancho completo dentro de la tarjeta */
  }
  </style>
</head>

<body>  
  <header class="container-fluid bg-dark position-sticky top-0">
    <ul class="nav nav-pills mb-3 py-3 container" id="pills-tab" role="tablist">
      <li class="nav-item text-primary" role="presentation">
        <a class="nav-link" id="pills-home-tab" href="index.php" role="tab" aria-controls="pills-home"
          aria-selected="true">Home</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
          type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Productos</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" href="Reservacion2.php" role="tab" aria-controls="reserva" aria-selected="false">Reservar
          Evento de Producto</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button"
          role="tab" aria-controls="pills-contact" aria-selected="false">Carrito</a>
      </li>
    </ul>
  </header>

  <div class="alert container position-sticky top-0 alert-primary hide" role="alert">
    Producto Añadido al carritos!
  </div>
  <div class="alert container position-sticky top-0 alert-danger remove" role="alert">
    Producto removido!
  </div>

  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
      1
    </div>
    <div class="tab-pane fade show active container" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
      <h2 class="h4 m-4 text-white">Cafetería 2</h2>
      <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
        <?php echo obtenerProductos(); ?>
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
          <!-- Aquí se mostrarán los productos añadidos al carrito -->
        </tbody>
      </table>
      <br><br>
      <div class="row mx-4">
        <div class="col">
          <h3 class="itemCartTotal text-white">Total: 0</h3>
        </div>
        <div class="col d-flex justify-content-end">
          <button class="btn btn-success">COMPRAR</button>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-dark p-3 mt-5">
    <p class="text-center m-0 text-muted">Universidad Don bosco</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
  </script>



  <!-- Además, agrega este script al final de tu cuerpo HTML, antes de la etiqueta de cierre </body> -->
  <script>
    // Manejar el envío del formulario para agregar un nuevo producto
    document.getElementById('formAgregarProducto').addEventListener('submit', function(event) {
      event.preventDefault(); // Evitar el comportamiento de envío predeterminado

      // Recolectar los valores del formulario
      const titulo = document.getElementById('titulo').value;
      const imagen = document.getElementById('imagen').value;
      const descripcion = document.getElementById('descripcion').value;
      const precio = document.getElementById('precio').value;

      // Crear el HTML para el nuevo producto
      const nuevoProductoHTML = `
        <div class="col d-flex justify-content-center mb-4">
          <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
            <h5 class="card-title pt-2 text-center text-primary">${titulo}</h5>
            <img src="${imagen}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-black-50 description">${descripcion}</p>
              <h5 class="text-primary">Precio: <span class="precio">$ ${precio}</span></h5>
              <div class="d-grid gap-2">
                <button class="btn btn-primary button">Añadir a Carrito</button>
              </div>
            </div>
          </div>
        </div>
      `;

      // Agregar el nuevo producto a la lista de productos
      document.querySelector('.row.row-cols-sm-1').insertAdjacentHTML('beforeend', nuevoProductoHTML);

      // Cerrar el modal después de agregar el producto
      $('#modalAgregarProducto').modal('hide');

      // Limpiar el formulario después de agregar el producto
      document.getElementById('formAgregarProducto').reset();



      function actualizarTotal() {
  // Obtener todos los elementos de precio en el carrito
  const precios = document.querySelectorAll('.precio');

  // Inicializar la variable para el total
  let total = 0;

  // Iterar sobre todos los elementos de precio y sumar sus valores
  precios.forEach((precio) => {
    total += parseFloat(precio.innerText.replace('$', '').trim());
  });

  // Actualizar el contenido del elemento total en el DOM
  document.getElementById('total').innerText = '$ ' + total.toFixed(2);
}

// Llamar a la función de actualización del total al cargar la página
window.addEventListener('load', actualizarTotal);






    });
  </script>
  <script src="../js/scripts.js"></script>
</body>
</html>