<?php
$servername = "localhost";
$database = "cafeteriaudb";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn) {
    die("Conexion fallida por down: " . mysqli_connect_error());
}

echo "Conexion exitosa";

mysqli_close($conn);

?>
