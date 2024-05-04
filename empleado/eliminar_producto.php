<?php
// Verificar si se recibió el ID del producto a eliminar
if (isset($_GET['id'])) {
    // Obtener el ID del producto de la solicitud GET
    $id = $_GET['id'];

    // Incluir el archivo de conexión a la base de datos
    include 'Conexion.php';

    // Crear una nueva instancia de la clase Conexion
    $conexion = new Conexion();

    // Preparar la consulta SQL para eliminar el producto
    $sql = "DELETE FROM productos WHERE id = $id";

    // Ejecutar la consulta
    if ($conexion->conn->query($sql) === TRUE) {
        // Producto eliminado correctamente
        // Puedes redirigir a alguna página de éxito o mostrar un mensaje
        echo "Producto eliminado correctamente.";
    } else {
        // Error al eliminar el producto
        // Puedes redirigir a alguna página de error o mostrar un mensaje
        echo "Error al eliminar el producto: " . $conexion->conn->error;
    }

    // Cerrar la conexión
    $conexion->cerrarConexion();
} else {
    // Si no se proporcionó el ID del producto, mostrar un mensaje de error
    echo "Error: ID del producto no proporcionado.";
}
?>

