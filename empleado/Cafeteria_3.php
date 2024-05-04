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
            $id = $row['id'];
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
                                <button class='btn btn-secondary mt-2 modificar-producto' data-id='$id'>Modificar</button>
                                <button class='btn btn-danger mt-2 eliminar-producto' data-id='$id'>Eliminar</button>
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

// Verificar si se ha enviado el formulario para agregar un nuevo producto
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar los datos recibidos
    $errors = array();

    // Verificar si el campo 'titulo' está presente y no está vacío
    if (empty($_POST['titulo'])) {
        $errors[] = "El campo 'Título' es requerido.";
    }
    // Verificar si el campo 'imagen' está presente y no está vacío
    if (empty($_POST['imagen'])) {
        $errors[] = "El campo 'URL de la Imagen' es requerido.";
    }
    // Verificar si el campo 'categoria' está presente y no está vacío
    if (empty($_POST['categoria'])) {
        $errors[] = "El campo 'Categoría' es requerido.";
    }
    // Verificar si el campo 'descripcion' está presente y no está vacío
    if (empty($_POST['descripcion'])) {
        $errors[] = "El campo 'Descripción' es requerido.";
    }
    // Verificar si el campo 'precio' está presente y no está vacío
    if (empty($_POST['precio'])) {
        $errors[] = "El campo 'Precio' es requerido.";
    }

    // Si hay errores, mostrarlos y detener el proceso
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
        exit; // Detener la ejecución del script
    }

    // Si no hay errores, procesar los datos
    // Crear una nueva instancia de la clase Conexion
    $conexion = new Conexion();

    // Obtener los datos del formulario
    $titulo = $_POST['titulo'];
    $imagen = $_POST['imagen'];
    $categoria = $_POST['categoria'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];

    // Preparar la consulta SQL de inserción
    $sql = "INSERT INTO productos (titulo, imagen, categoria, descripcion, precio) 
            VALUES ('$titulo', '$imagen', '$categoria', '$descripcion', $precio)";

    // Ejecutar la consulta
    if ($conexion->conn->query($sql) === TRUE) {
        // Producto agregado correctamente
        // Puedes redirigir a alguna página de éxito o mostrar un mensaje
        echo "Producto agregado correctamente.";
    } else {
        // Error al agregar el producto
        // Puedes redirigir a alguna página de error o mostrar un mensaje
        echo "Error al agregar el producto: " . $conexion->conn->error;
    }

    // Cerrar la conexión
    $conexion->cerrarConexion();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#bla">
  <title>Ventas de Alimentos</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

  <link rel="stylesheet" href="/css/styles.css/img." />
  <style>
    .card-img-top {
      height: 200px;
      object-fit: cover;
    }

    #btnMostrarModalAgregarProducto {
      position: fixed;
      bottom: 20px;
      left: 20px;
      z-index: 1000;
      /* Asegura que el botón esté por encima de otros elementos */
    }

    /* Establece un tamaño específico para los botones dentro de las tarjetas de producto */
    .button {
      width: 100%;
      /* Ancho completo dentro de la tarjeta */
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
      <h2 class="h4 m-4 text-white">Cafetería 3</h2>
      <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
        <?php echo obtenerProductos(); ?>
      </div>
      <button class="btn btn-primary btn-sm fixed-bottom m-3" id="btnMostrarModalAgregarProducto" data-bs-toggle="modal" data-bs-target="#modalAgregarProducto">Agregar Producto</button>
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

  <!-- Agrega este formulario modal al final de tu cuerpo HTML, antes de la etiqueta de cierre </body> -->

  <div class="modal fade" id="modalAgregarProducto" tabindex="-1" aria-labelledby="modalAgregarProductoLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalAgregarProductoLabel">Agregar Producto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="modal-body">
            <div class="mb-3">
              <label for="titulo" class="form-label">Título</label>
              <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            <div class="mb-3">
              <label for="imagen" class="form-label">URL de la Imagen</label>
              <input type="url" class="form-control" id="imagen" name="imagen" required>
            </div>
            <div class="mb-3">
              <label for="categoria" class="form-label">Categoría</label>
                <select class="form-select" id="categoria" name="categoria" required>
                  <option value="">Seleccionar...</option>
                  <option value="Granos">Granos</option>
                  <option value="Verduras">Verduras</option>
                  <option value="Frutas">Frutas</option>
                  <option value="Productos lácteos">Productos lácteos</option>
                  <option value="Proteínas">Proteínas</option>
                  <option value="Bebidas">Bebidas</option>
                  <option value="Snack">Snack</option>
                </select>
            </div>
            <div class="mb-3">
              <label for="descripcion" class="form-label">Descripción</label>
              <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
            </div>
            <div class="mb-3">
              <label for="precio" class="form-label">Precio</label>
              <input type="number" class="form-control" id="precio" name="precio" min="0" step="0.01" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Agregar Producto</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Además, agrega este formulario modal al final de tu cuerpo HTML, antes de la etiqueta de cierre </body> -->

  <div class="modal fade" id="modalEliminarProducto" tabindex="-1" aria-labelledby="modalEliminarProductoLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEliminarProductoLabel">Eliminar Producto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ¿Estás seguro de que deseas eliminar este producto?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-danger" id="confirmarEliminarProducto">Eliminar</button>
        </div>
      </div>
    </div>
  </div>
<!-- Modal de Modificación de Producto -->
<div class="modal fade" id="modalModificarProducto" tabindex="-1" aria-labelledby="modalModificarProductoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalModificarProductoLabel">Modificar Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="modificar_producto.php" method="post" id="formModificarProducto">
        <div class="modal-body">
          <input type="hidden" id="idProductoModificar" name="idProducto">
          <div class="mb-3">
            <label for="tituloModificar" class="form-label">Título</label>
            <input type="text" class="form-control" id="tituloModificar" name="titulo" required>
          </div>
          <div class="mb-3">
            <label for="imagenModificar" class="form-label">URL de la Imagen</label>
            <input type="url" class="form-control" id="imagenModificar" name="imagen" required>
          </div>
          <div class="mb-3">
            <label for="categoriaModificar" class="form-label">Categoría</label>
            <select class="form-select" id="categoriaModificar" name="categoria" required>
              <option value="">Seleccionar...</option>
              <option value="Granos">Granos</option>
              <option value="Verduras">Verduras</option>
              <option value="Frutas">Frutas</option>
              <option value="Productos lácteos">Productos lácteos</option>
              <option value="Proteínas">Proteínas</option>
              <option value="Bebidas">Bebidas</option>
              <option value="Snack">Snack</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="descripcionModificar" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcionModificar" name="descripcion" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="precioModificar" class="form-label">Precio</label>
            <input type="number" class="form-control" id="precioModificar" name="precio" min="0" step="0.01" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Modificar Producto</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  // Este script debe ir al final de tu archivo HTML, justo antes de la etiqueta de cierre </body>
  document.addEventListener('DOMContentLoaded', function() {
    const modificarBotones = document.querySelectorAll('.modificar-producto');
    const modalModificarProducto = new bootstrap.Modal(document.getElementById('modalModificarProducto'));

    modificarBotones.forEach(btn => {
      btn.addEventListener('click', function() {
        const id = this.getAttribute('data-id');
        // Aquí deberías obtener los datos actuales del producto usando AJAX o pasándolos directamente con PHP

        // Suponiendo que tienes los datos del producto, los asignarías a los campos del formulario
        document.getElementById('idProductoModificar').value = id;
        document.getElementById('tituloModificar').value = 'Titulo actual del producto';
        // Repite para los otros campos...

        modalModificarProducto.show();
      });
    });

    // Manejar el envío del formulario de modificación
    document.getElementById('formModificarProducto').addEventListener('submit', function(event) {
      event.preventDefault(); // Evitar el comportamiento de envío predeterminado del formulario

      // Recolectar los valores del formulario
      const formData = new FormData(this);

      // Enviar los datos del formulario al servidor para actualizar el producto
      fetch('modificar_producto.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.text())
      .then(data => {
        alert(data); // Mostrar mensaje de éxito o error
        modalModificarProducto.hide(); // Cerrar el modal
        location.reload(); // Recargar la página para ver los cambios
      })
      .catch(error => {
        console.error('Error:', error);
      });
    });
  });
</script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const eliminarBotones = document.querySelectorAll('.eliminar-producto');
        const modalEliminarProducto = new bootstrap.Modal(document.getElementById('modalEliminarProducto'));

        eliminarBotones.forEach(btn => {
            btn.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                const confirmarEliminarProductoBtn = document.getElementById('confirmarEliminarProducto');

                confirmarEliminarProductoBtn.addEventListener('click', function() {
                    // Envía una solicitud para eliminar el producto con el ID correspondiente
                    fetch(`eliminar_producto.php?id=${id}`, {
                        method: 'DELETE'
                    })
                    .then(response => {
                        if (response.ok) {
                            // Recargar la página después de eliminar el producto
                            window.location.reload();
                        } else {
                            // Manejar el caso de error
                            console.error('Error al eliminar el producto');
                        }
                    })
                    .catch(error => console.error('Error al eliminar el producto:', error));
                });
                modalEliminarProducto.show();
            });
        });
    });
  </script>
 

  <!-- Además, agrega este script al final de tu cuerpo HTML, antes de la etiqueta de cierre </body> -->
  <script src="../js/scripts.js"></script>
</body>

</html>