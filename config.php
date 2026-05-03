<?php
session_start();
$activePage = 'config';
$showSettings = true;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuracion - My Pets</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" href="imagenes/LOGO MYPETS.jpg">
    <link rel="stylesheet" href="style.css?v=20260429i">
    <link rel="stylesheet" href="Estilos/styleconfig.css?v=20260429i">
    <link rel="stylesheet" href="Estilos/theme.css?v=20260429i">
    <script src="theme.js?v=20260429i"></script>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <main class="settings-shell">
        <section class="settings-panel">
            <div class="settings-head">
                <div>
                    <p class="eyebrow">Detalles visuales</p>
                    <h1>Configuracion Global</h1>
                    <p class="lead">Administra la apariencia de la app y los accesos principales de tu cuenta desde un solo lugar.</p>
                </div>
                <div class="settings-badge">
                    <img src="imagenes/settings.png" alt="Ajustes">
                </div>
            </div>

            <section class="settings-grid" aria-label="Opciones de configuracion global">
                <article class="settings-module">
                    <div class="settings-module__top">
                        <span class="settings-module__icon">
                            <img src="imagenes/modonoche.png" alt="Modo oscuro">
                        </span>
                        <div class="settings-module__copy">
                            <h2>Modo Oscuro</h2>
                            <p>Activa una vista nocturna armoniosa. La preferencia se guarda automaticamente en localStorage.</p>
                        </div>
                    </div>

                    <div class="theme-row">
                        <div class="theme-state">
                            <strong>Tema de la aplicacion</strong>
                            <span>Cambia entre modo claro y oscuro en toda MY PETS.</span>
                        </div>
                        <label class="theme-switch" for="theme-toggle">
                            <input type="checkbox" id="theme-toggle" aria-label="Activar modo oscuro">
                            <span class="theme-slider"></span>
                        </label>
                    </div>
                </article>

                <article class="settings-module">
                    <div class="settings-module__top">
                        <span class="settings-module__icon">
                            <img src="imagenes/perfil.jpg" alt="Cuenta">
                        </span>
                        <div class="settings-module__copy">
                            <h2>Cuenta</h2>
                            <p>Edita el perfil de tu mascota o cierra sesion desde este panel centralizado.</p>
                        </div>
                    </div>

                    <div class="account-actions">
                        <a class="action-btn action-btn--primary" href="editar_perfil.php">Editar Perfil</a>
                        <a class="action-btn action-btn--secondary" href="logout.php">Cerrar Sesion</a>
                    </div>
                </article>
            </section>
        </section>
    </main>
</body>
</html>
