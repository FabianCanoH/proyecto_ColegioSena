<?php
include 'models/db.php';
$result = $conn->query("SELECT * FROM INFORMACION_ASPIRANTE");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-custom {
            font-weight: bold; /* Letras en negrita */
        }
        .btn-primary.btn-custom:hover {
            background-color: #004085; /* Color más claro al pasar el cursor */
            color: white; /* Color del texto al pasar el cursor */
        }
        .btn-warning.btn-custom:hover {
            background-color: #e0a800; /* Color más claro al pasar el cursor */
            color: white; /* Color del texto al pasar el cursor */
        }
        .btn-danger.btn-custom:hover {
            background-color: #c82333; /* Color más claro al pasar el cursor */
            color: white; /* Color del texto al pasar el cursor */
        }
    </style>
    <title>Aspirantes</title>
    <script>
        function confirmDelete(id) {
            return confirm('¿Está seguro de que desea eliminar este registro?');
        }
    </script>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Lista de Aspirantes</h2>
        <a href="create.php" class="btn btn-primary mb-3"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg>Nuevo Aspirante</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre Completo</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Número de Identificación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['Id_Informacion_Aspirante'] ?></td>
                    <td><?= $row['Primer_Nombre'] . " " . $row['Segundo_Nombre'] . " " . $row['Primer_Apellido'] . " " . $row['Segundo_Apellido'] ?></td>
                    <td><?= $row['Fecha_Nacimiento'] ?></td>
                    <td><?= $row['Numero_Identificacion_Aspirante'] ?></td>
                    <td>
                        <a href="controllers/edit.php?id=<?= $row['Id_Informacion_Aspirante'] ?>" class="btn btn-warning btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.854a.5.5 0 0 1 .708 0l2.292 2.292a.5.5 0 0 1 0 .708l-9.793 9.793a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l9.793-9.793zM11.207 2L2 11.207V13h1.793L14 3.793 11.207 2zM1 13.5V15h1.5l.5-.5H1z"/>
                            </svg> 
                            Editar
                        </a>
                        <a href="controllers/delete.php?id=<?= $row['Id_Informacion_Aspirante'] ?>" class="btn btn-danger btn-sm" onclick="return confirmDelete(<?= $row['Id_Informacion_Aspirante'] ?>)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg> 
                            Eliminar
                        </a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
