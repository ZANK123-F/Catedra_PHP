<?php
class Conexion
{
    public $servername = "localhost";
    public $database = "cafeteriaudb";
    public $username = "root";
    public $password = "";
    public $conn;

    public function __construct()
    {
        $this->abrirConexion();
    }
    public function abrirConexion()
    {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        if (!$this->conn) {
            die("Conexion fallida por down: " . mysqli_connect_error());
        }
    }

    public function cerrarConexion()
    {
        mysqli_close($this->conn);
    }
}
