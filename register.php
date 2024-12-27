<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f4f9;
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
            max-width: 500px;
        }
        .form-container h2 {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2 class="text-center">Crear Cuenta</h2>
        
        <nav class="nav justify-content-center mb-4">
            <a class="nav-link active" href="actiontwo.php">Dos opciones</a>
        </nav>

        <form action="" method="post">
            <?php
            include "controller/register.php";
            include "model/conexcion.php";
            ?>
            
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input
                    type="text"
                    class="form-control"
                    id="nombre"
                    name="nombre"
                    placeholder="Tu nombre"
                    required
                />
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input
                    type="text"
                    class="form-control"
                    id="apellido"
                    name="apellido"
                    placeholder="Tu apellido"
                    required
                />
            </div>

            <div class="mb-3">
                <label for="numero" class="form-label">Número de Teléfono</label>
                <input
                    type="number"
                    class="form-control"
                    id="numero"
                    name="numero"
                    placeholder="123456789"
                    maxlength="9"
                    required
                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 9);"
                />
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">Correo Electrónico</label>
                <input
                    type="email"
                    class="form-control"
                    id="correo"
                    name="correo"
                    placeholder="ejemplo@mail.com"
                    required
                />
            </div>

            <div class="mb-3">
                <label for="contrasena" class="form-label">Contraseña</label>
                <input
                    type="password"
                    class="form-control"
                    id="contrasena"
                    name="contrasena"
                    placeholder="********"
                    required
                />
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrarse</button>
                <a class="btn btn-outline-secondary" href="login.php">Iniciar Sesión</a>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
