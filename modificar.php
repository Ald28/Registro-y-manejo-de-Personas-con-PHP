<?php
include 'model/conexcion.php';
$id = $_GET["id"];
$sql = $conn->query("SELECT * FROM login WHERE id = '$id'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }
        .form-container h2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2 class="text-center">Editar Usuario</h2>
        
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $_GET["id"] ?>">

            <?php include "controller/modificar.php"; ?>
            <?php while ($a = $sql->fetchObject()) { ?>

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $a->nombre ?>" required>
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="<?= $a->apellido ?>" required>
            </div>

            <div class="mb-3">
                <label for="numero" class="form-label">Número</label>
                <input type="number" class="form-control" id="numero" name="numero" value="<?= $a->numero ?>" required>
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" class="form-control" id="correo" name="correo" value="<?= $a->correo ?>" required>
            </div>

            <div class="mb-3">
                <label for="contrasena" class="form-label">Contraseña</label>
                <input type="text" class="form-control" id="contrasena" name="contrasena" value="<?= $a->contrasena ?>" required>
            </div>

            <?php } ?>

            <div class="d-flex justify-content-between">
                <button type="submit" name="btnmodificar" value="ok" class="btn btn-primary">Modificar</button>
                <a href="crud.php" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
