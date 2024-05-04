<?php
include 'Conexion.php';

// Verificar si se ha enviado el formulario para modificar un producto
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Crear una nueva instancia de la clase Conexion
    $conexion = new Conexion();

    // Obtener los datos del formulario
    $id = $_POST['idProducto'];
    $titulo = $_POST['titulo'];
    $imagen = $_POST['imagen'];
    $categoria = $_POST['categoria'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];

    // Preparar la consulta SQL de actualización
    $sql = "UPDATE productos SET titulo = '$titulo', imagen = '$imagen', categoria = '$categoria', descripcion = '$descripcion', precio = $precio WHERE id = $id";

    // Ejecutar la consulta
    if ($conexion->conn->query($sql) === TRUE) {
        // Producto modificado correctamente
        echo "Producto modificado correctamente.";
    } else {
        // Error al modificar el producto
        echo "Error al modificar el producto: " . $conexion->conn->error;
    }

    // Cerrar la conexión
    $conexion->cerrarConexion();
}
?>


