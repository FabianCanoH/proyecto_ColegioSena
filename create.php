<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Nuevo Aspirante</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Nuevo Aspirante</h2>
        <form method="POST" action="controllers/guardar_aspirante.php">

            <!-- Primera fila -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="numero_identificacion_aspirante" class="form-label">Número de Identificación</label>
                    <input type="text" name="numero_identificacion_aspirante" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="tipo_identificacion" class="form-label">Tipo de Identificación</label>
                    <select name="tipo_identificacion" class="form-control" required>
                        <option value="Sin Seleccion">Seleccione un Tipo de Identificación</option>
                        <option value="Cedula Ciudadania">Cédula Ciudadanía</option>
                        <option value="Tarjeta Identidad">Tarjeta Identidad</option>
                        <option value="Pasaporte">Pasaporte</option>
                        <option value="Registro de Nacimiento">Registro de Nacimiento</option>
                    </select>
                </div>
            </div>

            <!-- Segunda fila -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="primer_nombre" class="form-label">Primer Nombre</label>
                    <input type="text" name="primer_nombre" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="segundo_nombre" class="form-label">Segundo Nombre</label>
                    <input type="text" name="segundo_nombre" class="form-control">
                </div>
            </div>

            <!-- Tercera fila -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="primer_apellido" class="form-label">Primer Apellido</label>
                    <input type="text" name="primer_apellido" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="segundo_apellido" class="form-label">Segundo Apellido</label>
                    <input type="text" name="segundo_apellido" class="form-control">
                </div>
            </div>

            <!-- Cuarta fila -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="genero" class="form-label">Género</label>
                    <select name="genero" class="form-control" required>
                        <option value="Sin Seleccion">Seleccione un Género</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Masculino">Masculino</option>
                    </select>
                </div>
            </div>

            <!-- Quinta fila -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="parentesco" class="form-label">Parentesco</label>
                    <select name="parentesco" class="form-control" required>
                        <option value="Sin Seleccion">Seleccione un Parentesco</option>
                        <option value="Padre">hija(o)</option>
                        <option value="Padre">Padre</option>
                        <option value="Madre">Madre</option>
                        <option value="Abuelo(a)">Abuelo(a)</option>
                        <option value="Tía">Tía</option>
                        <option value="Tío">Tío</option>
                        <option value="Acudiente">Acudiente</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="numero_contacto" class="form-label">Número de Contacto</label>
                    <input type="text" name="numero_contacto" class="form-control" required>
                </div>
            </div>

            <!-- Sexta fila -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="correo_electronico" class="form-label">Correo Electrónico</label>
                    <input type="email" name="correo_electronico" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="direccion_residencia" class="form-label">Dirección de Residencia</label>
                    <input type="text" name="direccion_residencia" class="form-control" required>
                </div>
            </div>

            <!-- Séptima fila -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="estrato" class="form-label">Estrato</label>
                    <select name="estrato" class="form-control" required>
                        <option value="Sin Seleccion">Seleccione un Estrato</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="barrio" class="form-label">Barrio</label>
                    <select id="barrio" name="barrio" class="form-control" required>
                        <option value="">Seleccione un barrio</option>
                    </select>
                </div>
            </div>
            <!-- Octava fila -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="comunas" class="form-label">Comunas</label>
                    <select id="comunas" name="comunas" class="form-control" required>
                        <option value="">Seleccione una Comuna</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="discapacidad" class="form-label">Tipo Discapacidad</label>
                    <select id="discapacidad" name="discapacidad" class="form-control" required>
                        <option value="">Seleccione un Tipo de Discapacidad</option>
                    </select>
                </div>
            <!-- Novena fila -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="victima_conflicto" class="form-label"> ¿Es usted víctima del conflicto? </label>
                    <select id="victima_conflicto" name="victima_conflicto" class="form-control" required>
                        <option value=""> Seleccione una opción </option>
                        <option value="Si"> Sí </option>
                        <option value="No"> No </option>
                    </select>
                </div>
            
                <div class="col-md-6 mb-3">
                    <label for="tipo_desplazamiento" class="form-label">Tipo Desplazamiento</label>
                    <select name="tipo_desplazamiento" class="form-control" required>
                        <option value="Sin Seleccion">Seleccione un Tipo de Desplazamiento</option>
                        <option value="Conflicto Armado">Conflicto Armado</option>
                        <option value="Amenazas">Amenazas</option>
                        <option value="Despojo Tierras">Despojo de Tierras</option>
                        <option value="Reclutamiento Forzado">Reclutamiento Forzado</option>
                        <option value="Violencia Sexual">Violencia Sexual</option>
                        <option value="Homicidio">Homicidio de Familiar o líder comunitario</option>
                        <option value="Ninguna">Ninguna</option>
                    </select>
                </div>

            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a href="indexx.php" class="btn btn-warning">Regresar</a>
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
                const select = document.getElementById('comunas');
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
