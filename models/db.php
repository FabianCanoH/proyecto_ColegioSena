<?php
// Configuración de la base de datos
$host = "localhost";
$user = "root";
$password = "Fabo2677*";
$dbname = "bd_colegio";
// Crear la conexión
$conn = new mysqli($host, $user, $password, $dbname);
// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>



