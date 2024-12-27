<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .btn-action {
            margin-right: 5px;
        }
        .nav-link {
            font-size: 1.2rem;
            font-weight: 500;
        }
        .nav {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <!-- Barra de navegación centrada -->
    <nav class="nav justify-content-center bg-white shadow-sm p-3 rounded">
        <a class="nav-link active" href="actiontwo.php" aria-current="page">Dos opciones</a>
    </nav>

    <!-- Tabla de datos -->
    <div class="container mt-4">
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Número Celular</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'model/conexcion.php';
                    $sql = $conn->query("SELECT * FROM login");
                    while ($a = $sql->fetchObject()) {
                    ?>
                    <tr>
                        <td><?= $a->id ?></td>
                        <td><?= $a->nombre ?></td>
                        <td><?= $a->apellido ?></td>
                        <td><?= $a->numero ?></td>
                        <td><?= $a->correo ?></td>
                        <td>
                            <a href="modificar.php?id=<?= $a->id?>" class="btn btn-warning btn-sm btn-action">Editar</a>
                            <a href="controller/eliminar.php?id=<?= $a->id?>" class="btn btn-danger btn-sm btn-action" onclick="return confirm('¿Estás seguro de eliminar este registro?')">Eliminar</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
