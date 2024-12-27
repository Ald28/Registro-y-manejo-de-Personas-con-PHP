<?php
session_start();
if (empty($_SESSION["id"])) {
    header("location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    <div class="container">
        <h1 class="mb-4">
            ¡Bienvenido, 
            <span class="text-primary">
                <?php echo htmlspecialchars($_SESSION["nombre"] . " " . $_SESSION["apellido"]); ?>
            </span>!
        </h1>
        
        <p class="lead">Estás dentro de la interfaz de usuario.</p>

        <a href="controller/cerrar_sesion.php" class="btn btn-danger mt-4">Cerrar sesión</a>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
