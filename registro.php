<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - MY PETS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="imagenes/LOGO MYPETS.jpg">
    <link rel="stylesheet" href="Estilos/styleregistro.css?v=20260429d">
</head>
<body>
    <div class="page-wrap">
        <header class="header">
            <div class="logo">
                <img src="imagenes/LOGO MYPETS.jpg" alt="Logo de My Pets">
                <h1>MY PETS</h1>
            </div>
        </header>

        <main class="main-content">
            <h2>!Crea tu cuenta en MY PETS!</h2>
            <p class="muted">Ingresa tus datos para registrarte</p>

            <form class="register-form" action="register.php" method="POST" novalidate>
                <div class="form-group">
                    <label for="nombre-dueno">Nombre del dueno</label>
                    <input type="text" id="nombre-dueno" name="nombre_dueno" placeholder="Ingrese su nombre" required>
                </div>

                <div class="form-group">
                    <label for="nombre-mascota">Nombre de la mascota</label>
                    <input type="text" id="nombre-mascota" name="nombre_mascota" placeholder="Ingrese el nombre de su mascota">
                </div>

                <div class="form-group">
                    <label for="correo">Correo electronico</label>
                    <input type="email" id="correo" name="correo" placeholder="Ingrese su correo electronico" required>
                </div>

                <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" id="usuario" name="usuario" placeholder="Elige un usuario" required>
                </div>

                <div class="form-group">
                    <label for="contacto">Numero de contacto</label>
                    <input type="tel" id="contacto" name="contacto" placeholder="Ingrese su numero de contacto">
                </div>

                <div class="form-group">
                    <label for="contrasena">Contrasena (min. 8 caracteres)</label>
                    <input type="password" id="contrasena" name="contrasena" placeholder="Ingrese una contrasena" minlength="8" required>
                </div>

                <div class="form-group">
                    <label for="confirmar-contrasena">Confirmar contrasena</label>
                    <input type="password" id="confirmar-contrasena" name="confirmar_contrasena" placeholder="Confirme su contrasena" minlength="8" required>
                </div>

                <button type="submit" class="submit-button">Enviar</button>
            </form>
        </main>
    </div>

    <?php include 'scripts.php'; ?>
</body>
</html>
