<?php
session_start();
$errors = [
    'campos'       => 'Completa usuario y contraseña.',
    'credenciales' => 'Usuario o contraseña incorrectos.',
];
$errorKey = $_GET['error'] ?? null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - MY PETS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="imagenes/LOGO MYPETS.jpg">
    <link rel="stylesheet" href="Estilos/style.css">
</head>
<body>
    <div class="page-wrap">
        <main class="main-content">
            <div class="hero-illustration"></div>
            <h2>¡Bienvenido a MY PETS!</h2>
            <p class="muted">Ingresa a tu cuenta</p>

            <?php if ($errorKey && isset($errors[$errorKey])): ?>
                <p class="error"><?= htmlspecialchars($errors[$errorKey], ENT_QUOTES, 'UTF-8'); ?></p>
            <?php endif; ?>

            <form class="login-form" action="login.php" method="POST" novalidate>
                <div class="form-group">
                    <label for="usuario">USUARIO O CORREO</label>
                    <input type="text" id="usuario" name="usuario" placeholder="Ingrese su usuario o correo" required>    
                </div>
                <div class="form-group">
                    <label for="contrasena">CONTRASEÑA</label>
                    <input type="password" id="contrasena" name="contrasena" placeholder="Ingrese su contraseña" required minlength="8">
                </div>
                <button type="submit" class="login-button">ENTRAR</button>
                <a href="registro.php" class="register-button">REGISTRARSE</a>
            </form>

        </main>
    </div>
</body>
</html>
