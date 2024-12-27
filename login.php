<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <!-- Bootstrap CSS -->
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
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .form-container h2 {
            margin-bottom: 30px;
        }
        .nav-link {
            font-size: 1.1rem;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2 class="text-center">Iniciar Sesión</h2>
        
        <nav class="nav justify-content-center mb-4">
            <a class="nav-link active" href="actiontwo.php" aria-current="page">Dos opciones</a>
        </nav>
        
        <form action="" method="post">
            <?php
            include "controller/login.php";
            include "model/conexcion.php";
            ?>

            <div class="mb-3">
                <label for="correo" class="form-label">Correo Electrónico</label>
                <input
                    type="email"
                    class="form-control"
                    name="correo"
                    id="correo"
                    placeholder="abc@mail.com"
                    required
                />
            </div>

            <div class="mb-3">
                <label for="contrasena" class="form-label">Contraseña</label>
                <input
                    type="password"
                    class="form-control"
                    name="contrasena"
                    id="contrasena"
                    placeholder="********"
                    required
                />
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="btningresar" value="ok">Ingresar</button>
                <a class="btn btn-outline-secondary" href="register.php">Registrarse</a>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
