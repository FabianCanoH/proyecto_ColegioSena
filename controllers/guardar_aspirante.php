<?php
include '../models/db.php'; // Ajusta la ruta según la ubicación del archivo db.php

// Obtener datos del formulario
$numero_identificacion = $_POST['numero_identificacion_aspirante'];
$primer_nombre = $_POST['primer_nombre'];
$segundo_nombre = $_POST['segundo_nombre'];
$primer_apellido = $_POST['primer_apellido'];
$segundo_apellido = $_POST['segundo_apellido'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$tipo_identificacion = $_POST['tipo_identificacion'];
$genero = $_POST['genero'];
$parentesco = $_POST['parentesco'];
$numero_contacto = $_POST['numero_contacto'];
$correo_electronico = $_POST['correo_electronico'];
$direccion_residencia = $_POST['direccion_residencia'];
$estrato = $_POST['estrato'];
$barrio = $_POST['barrio'];
$comunas = $_POST['comunas'];
$discapacidad = $_POST['discapacidad'];
$victima_conflicto = $_POST['victima_conflicto']; // Aquí se obtiene el valor del radio button
$tipo_desplazamiento = $_POST['tipo_desplazamiento'];


// Insertar datos en la base de datos
$sql = "INSERT INTO INFORMACION_ASPIRANTE (numero_identificacion_aspirante, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, fecha_nacimiento, tipo_identificacion, genero, parentesco, numero_contacto, correo_electronico, direccion_residencia, estrato, barrio, comuna, tipo_discapacidad, victima_conflicto, tipo_desplazamiento)
VALUES ('$numero_identificacion', '$primer_nombre', '$segundo_nombre', '$primer_apellido', '$segundo_apellido', '$fecha_nacimiento', '$tipo_identificacion', '$genero', '$parentesco', '$numero_contacto', '$correo_electronico', '$direccion_residencia', '$estrato', '$barrio', '$comunas', '$discapacidad', '$victima_conflicto', '$tipo_desplazamiento')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../indexx.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
