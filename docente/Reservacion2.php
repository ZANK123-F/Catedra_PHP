<?php
include 'Conexion.php';

// Función para obtener los productos de la base de datos y generar su HTML
function obtenerProductosBD() {
    // Crear una nueva instancia de la clase Conexion
    $conexion = new Conexion();

    // Verificar si la conexión se estableció correctamente
    if ($conexion->conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conexion->conn->connect_error);
    }

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
        return "No se encontraron productos en la base de datos.";
    }
}

// Llamada a la función para obtener productos de la base de datos
$productosCombinados = obtenerProductosBD();







// Verificar si se ha enviado el formulario y procesar la reserva
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Verificar que todos los campos del formulario estén presentes y no estén vacíos
  if (!empty($_POST['nombres']) && !empty($_POST['apellidos']) && !empty($_POST['carnet']) && !empty($_POST['fecha_reserva']) && !empty($_POST['productos_disponibles'])) {
      // Llamar a la función para procesar la reserva y actualizar la tabla de productos
      reservarProductos();
      // Actualizar la lista de productos después de la reserva
      $productosCombinados = obtenerProductosBD();
  } else {
      echo "<script>alert('Todos los campos del formulario son requeridos.');</script>";
  }
}


// Función para procesar la reserva y guardar el registro en la base de datos
function reservarProductos() {
  // Obtener los valores de los campos del formulario
  $nombres = $_POST['nombres'];
  $apellidos = $_POST['apellidos'];
  $carnet = $_POST['carnet'];
  $fechaReserva = $_POST['fecha_reserva'];
  $productosDisponibles = $_POST['productos_disponibles'];

  // Crear una nueva instancia de la clase Conexion
  $conexion = new Conexion();

  // Preparar la consulta SQL con una consulta preparada para evitar la inyección SQL
  $sql = "INSERT INTO pedidos (nombres, apellidos, carnet, fecha_reserva, productos_disponibles) VALUES (?, ?, ?, ?, ?)";

  // Preparar la consulta
  $stmt = $conexion->conn->prepare($sql);

  // Verificar si la preparación de la consulta fue exitosa
  if ($stmt) {
      // Vincular parámetros
      $stmt->bind_param("sssss", $nombres, $apellidos, $carnet, $fechaReserva, $productosDisponibles);

      // Ejecutar la consulta y verificar errores
      if ($stmt->execute()) {
          // Si la inserción fue exitosa, mostrar un mensaje al usuario
          echo "<script>alert('Su Reserva ha sido Guardada. Reclame su pedido en el comedor. Gracias');</script>";
          // Limpiar el formulario después de guardar el registro
          echo "<script>limpiarFormulario();</script>";
      } else {
          // Si hubo algún error, mostrar un mensaje de error al usuario
          echo "<script>alert('Hubo un error al guardar el pedido. Por favor, inténtelo de nuevo más tarde.');</script>";
          // Mostrar el mensaje de error específico de MySQL
          echo "Error MySQL: " . $conexion->conn->error;
          // También podrías registrar el error para su análisis posterior
          error_log("Error al guardar el pedido en la base de datos: " . $conexion->conn->error);
      }

      // Cerrar la conexión y liberar los recursos
      $stmt->close();
  } else {
      // Si hubo algún error al preparar la consulta, mostrar un mensaje de error
      echo "<script>alert('Error al preparar la consulta. Por favor, inténtelo de nuevo más tarde.');</script>";
      // También podrías registrar el error para su análisis posterior
      error_log("Error al preparar la consulta para guardar el pedido en la base de datos.");
  }

  // Cerrar la conexión
  $conexion->cerrarConexion();
}





?>


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
        <a class="nav-link active" id="pills-profile-tab" href="Cafeteria_2.php" role="tab"
          aria-controls="pills-profile" aria-selected="false">Productos</a>
      </li>

    </ul>
  </header>

  <section class="form-register">
        <h4>Reserva de Productos</h4>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
            <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">
            <input class="controls" type="text" name="carnet" id="carnet" placeholder="Ingrese su carnet">
            <input class="controls" type="date" name="fecha_reserva" id="fecha_reserva"
                placeholder="Fecha de Reserva">
            <input class="controls" type="text" name="productos_disponibles" id="productos_disponibles"
                placeholder="Productos disponibles">
            <button type="button" id="mostrarProductosBtn" class="botons">Ver Productos Disponibles</button>
            <button type="submit" class="botons">Reservar Productos</button>

        </form>
    </section>


  <div id="productosContainer" class="container" style="display: none;">
    <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">


    <?php echo $productosCombinados; ?>
    </div>
  </div>

  
  <script>
// Función para mostrar los productos disponibles
function mostrarProductos() {
  const productosContainer = document.getElementById('productosContainer');
  productosContainer.style.display = 'block';
}

// Función para agregar el nombre del producto al campo de productos disponibles
function agregarProducto(nombreProducto) {
  const productosDisponiblesInput = document.getElementById('productos_disponibles');
  
  // Obtener el valor actual del campo de productos disponibles
  let productosDisponibles = productosDisponiblesInput.value;

  // Agregar el nombre del producto al campo de productos disponibles
  productosDisponibles += nombreProducto + ', ';

  // Actualizar el valor del campo de productos disponibles
  productosDisponiblesInput.value = productosDisponibles;

  // Mostrar un mensaje de confirmación
  alert('Producto añadido a productos disponibles: ' + nombreProducto);
}

// Función para reservar un producto
function reservarProducto() {
  const nombres = document.getElementById('nombres').value;
  const apellidos = document.getElementById('apellidos').value;
  const carnet = document.getElementById('carnet').value;
  const fechaReserva = document.getElementById('fecha_reserva').value;
  const productosDisponibles = document.getElementById('productos_disponibles').value;

  // Validar que los campos no estén vacíos
  if (!nombres || !apellidos || !carnet || !fechaReserva || !productosDisponibles) {
    alert('Llenar todos los campos para completar la reserva');
  } else {
    // Realizar alguna acción con los datos del formulario, si es necesario
    alert('Su Reserva ha sido Guardada. Reclame su pedido en el comedor. Gracias');
    limpiarFormulario();
  }
}

// Función para limpiar el formulario
function limpiarFormulario() {
  document.getElementById('nombres').value = '';
  document.getElementById('apellidos').value = '';
  document.getElementById('carnet').value = '';
  document.getElementById('fecha_reserva').value = '';
  document.getElementById('productos_disponibles').value = '';
}

// Agregar un event listener al botón "Ver Productos Disponibles"
const mostrarProductosBtn = document.getElementById('mostrarProductosBtn');
mostrarProductosBtn.addEventListener('click', mostrarProductos);

// Agregar event listeners a todos los botones de "Añadir a Carrito"
const botonesAgregarCarrito = document.querySelectorAll('.button');
botonesAgregarCarrito.forEach(button => {
  button.addEventListener('click', function() {
    const nombreProducto = this.closest('.card').querySelector('.card-title').textContent;
    agregarProducto(nombreProducto);
  });

});


// Agregar un event listener al botón "Reservar Productos"
const reservarProductosBtn = document.getElementById('reservarProductosBtn');
reservarProductosBtn.addEventListener('click', function() {
  reservarProducto();
});

</script>

 

  <script src="../js/scripts.js"></script>


</html>