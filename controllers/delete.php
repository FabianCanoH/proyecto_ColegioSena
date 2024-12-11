<?php
include '../models/db.php'; // Ajusta la ruta según la ubicación del archivo db.php

$id = $_GET['id'];

if (isset($id)) {
    $sql = "DELETE FROM informacion_aspirante WHERE Id_Informacion_Aspirante = $id";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: ../indexx.php"); // Redirige a la página principal después de eliminar
        exit();
    } else {
        echo "Error al eliminar el registro: " . $conn->error;
    }
} else {
    echo "ID no especificado.";
}

$conn->close();
?>
