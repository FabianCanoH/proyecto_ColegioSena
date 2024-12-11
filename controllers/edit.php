<?php
include '../models/db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM INFORMACION_ASPIRANTE WHERE Id_Informacion_Aspirante = $id");
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero_identificacion_aspirante = $_POST['numero_identificacion_aspirante'];
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
    $direccion_residenca = $_POST['direccion_residencia'];
    $estrato = $_POST['estrato'];
    $barrio = $_POST['barrio'];
    $comuna = $_POST['comuna'];
    $tipo_discapacidad = $_POST['tipo_discapacidad'];
    $victima_confilcto = $_POST['victima_conficto'];
    $tipo_desplazamiento = $_POST['tipo_desplazamiento'];

    $sql = "UPDATE INFORMACION_ASPIRANTE SET 
            Numero_Identificacion_Aspirante='$numero_identificacion_aspirante', Primer_Nombre='$primer_nombre', Segundo_Nombre='$segundo_nombre', 
            Primer_Apellido='$primer_apellido', Segundo_Apellido='$segundo_apellido', Fecha_Nacimiento='$fecha_nacimiento', Tipo_Identificacion='$tipo_identificacion',
            Genero='$genero', Parentesco='$parentesco', Numero_Contacto='$numero_contacto', Correo_Electronico='$correo_electronico', Direccion_Residencia='$direccion_residenca',
            Estrato='$estrato', Barrio='$barrio', Comuna='$comuna', Tipo_Discapacidad='$tipo_discapacidad', Victima_Conflicto='$victima_confilcto',
            Tipo_Desplazamiento='$tipo_desplazamiento' 
            WHERE Id_Informacion_Aspirante=$id";
    
    if ($conn->query($sql)) {
        header("Location: ../indexx.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Editar Aspirante</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Aspirante</h2>
        <form method="POST">
        

            <!-- Primera fila -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="numero_identificacion_aspirante" class="form-label">Número de Identificación</label>
                    <input type="text" name="numero_identificacion_aspirante" class="form-control" value="<?= $row['Numero_Identificacion_Aspirante'] ?>" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="tipo_identificacion" class="form-label">Tipo Identificación</label>
                    <input type="text" name="tipo_identificacion" class="form-control" value="<?= $row['Tipo_Identificacion'] ?>" required>
                </div>
            </div>

            <!-- Segunda fila -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="primer_nombre" class="form-label">Primer Nombre</label>
                    <input type="text" name="primer_nombre" class="form-control" value="<?= $row['Primer_Nombre'] ?>" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="segundo_nombre" class="form-label">Segundo Nombre</label>
                    <input type="text" name="segundo_nombre" class="form-control" value="<?= $row['Segundo_Nombre'] ?>">
                </div>
            </div>

            <!-- Tercera fila -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="primer_apellido" class="form-label">Primer Apellido</label>
                    <input type="text" name="primer_apellido" class="form-control" value="<?= $row['Primer_Apellido'] ?>" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="segundo_apellido" class="form-label">Segundo Apellido</label>
                    <input type="text" name="segundo_apellido" class="form-control" value="<?= $row['Segundo_Apellido'] ?>">
                </div>
            </div>

            <!-- Cuarta fila -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control" value="<?= $row['Fecha_Nacimiento'] ?>" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="genero" class="form-label">Genero</label>
                    <input type="text" name="genero" class="form-control" value="<?= $row['Genero'] ?>" required>
                </div>
            </div>

            <!-- Quinta fila -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="parentesco" class="form-label">Parentesco</label>
                    <input type="text" name="prentesco" class="form-control" value="<?= $row['Parentesco'] ?>" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="numero_contacto" class="form-label">Número de Contacto</label>
                    <input type="text" name="numero_contacto" class="form-control" value="<?= $row['Numero_Contacto'] ?>" required>
                </div>
            </div>

            <!-- Sexta fila -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="correo_electronico" class="form-label">Correo Electrónico</label>
                    <input type="email" name="correo_electronico" class="form-control" value="<?= $row['Correo_Electronico'] ?>" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="direccion_residencia" class="form-label">Dirección de Residencia</label>
                    <input type="text" name="direccion_residencia" class="form-control" value="<?= $row['Direccion_Residencia'] ?>" required>
                </div>
            </div>

            <!-- Séptima fila -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="estrato" class="form-label">Estrato</label>
                    <input type="text" name="estrato" class="form-control" value="<?= $row['Estrato'] ?>" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="barrio" class="form-label">Barrio</label>
                    <input type="text" name="barrio" class="form-control" value="<?= $row['Barrio'] ?>" required>
                </div>
            </div>
            <!-- Octava fila -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="comuna" class="form-label">Comuna</label>
                    <input type="text" name="comuna" class="form-control" value="<?= $row['Comuna'] ?>" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="tipo_discapacidad" class="form-label">Tipo Discapacidad</label>
                    <input type="text" name="tipo_discapacidad" class="form-control" value="<?= $row['Tipo_Discapacidad'] ?>" required>
                </div>
            </div>
            <!-- Novena fila -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label d-block">¿Es usted víctima del conflicto?</label>
                    <div class="form-check form-check-inline">
                        <input 
                            class="form-check-input" 
                            type="radio" 
                            id="victima_si" 
                            name="victima_conflicto" 
                            value="si" <?= ($row['Victima_Conflicto'] == 'si') ? 'checked' : '' ?>
                            required>
                        <label class="form-check-label" for="victima_si">Sí</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input 
                            class="form-check-input" 
                            type="radio" 
                            id="victima_no" 
                            name="victima_conflicto" 
                            value="no" <?= ($row['Victima_Conflicto'] == 'no') ? 'checked' : '' ?>
                            required>
                        <label class="form-check-label" for="victima_no">No</label>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="tipo_desplazamiento" class="form-label">Tipo Desplazamiento</label>
                    <input type="text" name="tipo_desplazamiento" class="form-control" value="<?= $row['Tipo_Desplazamiento'] ?>" required>
                </div>

            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="/proyecto_colegio/indexx.php" class="btn btn-warning">Regresar</a>
                </div>
            </div>
        </form>
    </div>
    <script>
        fetch('barrios.json')
            .then(response => response.json())
            .then(data => {
                const select = document.getElementById('barrio');
                data.forEach(barrio => {
                    const option = document.createElement('option');
                    option.value = barrio.nombre;
                    option.textContent = barrio.nombre;
                    select.appendChild(option);
                });
            })
            .catch(error => console.error('Error al cargar los barrios:', error));

        fetch('comunas.json')
            .then(response => response.json())
            .then(data => {
                const select = document.getElementById('comuna');
                data.forEach(comunas => {
                    const option = document.createElement('option');
                    option.value = comunas.nombre;
                    option.textContent = `${comunas.nombre} (${comunas.tipo})`;
                    select.appendChild(option);
                });
            })
            .catch(error => console.error('Error al cargar las comunas:', error));
        fetch('discapacidades.json')
            .then(response => response.json())
            .then(data => {
                const select = document.getElementById('discapacidad');
                data.forEach(discapacidad => {
                    const option = document.createElement('option');
                    option.value = discapacidad.nombre;
                    option.textContent = discapacidad.nombre;
                    select.appendChild(option);
                });
            })
            .catch(error => console.error('Error al cargar las discapacidades:', error));
    </script>
</body>
</html>
