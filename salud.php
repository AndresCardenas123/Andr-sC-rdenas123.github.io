<?php
session_start();
$activePage = 'salud';
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}
require_once __DIR__ . '/../MY%20PETS%20PROYECT/Database/database.php';
$pdo = getConnection();
$userId = (int) $_SESSION['user_id'];

$stmt = $pdo->prepare('SELECT * FROM salud WHERE user_id = :uid LIMIT 1');
$stmt->execute([':uid' => $userId]);
$salud = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salud - My Pets</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="imagenes/LOGO MYPETS.jpg">
    <link rel="stylesheet" href="style.css?v=20260429d">
    <link rel="stylesheet" href="Estilos/stylesalud.css?v=20260429g">
    <link rel="stylesheet" href="Estilos/theme.css?v=20260429f">
    <script src="theme.js?v=20260429f"></script>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="page-wrap">
        <main class="health-wrapper">
            <section class="main-container health-card-main">
                <header class="health-head">
                    <div>
                        <h2 class="health-title">Salud de tu Mascota</h2>
                        <p class="health-sub">Vista de solo lectura con el resumen principal del bienestar de tu mascota.</p>
                    </div>
                    <a class="btn btn-primary" href="editar_salud.php">Editar historial</a>
                </header>

                <section class="health-state">
                    <div class="tiles" role="list">
                        <article class="tile" role="listitem">
                            <div class="tile__top">
                                <div class="tile__icon" aria-hidden="true"><img src="imagenes/frecuenciacard.png" alt=""></div>
                                <div class="tile__label">Frecuencia cardiaca</div>
                            </div>
                            <div class="tile__value"><?= htmlspecialchars($salud['frecuencia_cardiaca'] ?? '-', ENT_QUOTES, 'UTF-8'); ?></div>
                        </article>
                        <article class="tile" role="listitem">
                            <div class="tile__top">
                                <div class="tile__icon" aria-hidden="true"><img src="imagenes/actfis.png" alt=""></div>
                                <div class="tile__label">Tiempo activo</div>
                            </div>
                            <div class="tile__value"><?= htmlspecialchars($salud['tiempo_activo'] ?? '-', ENT_QUOTES, 'UTF-8'); ?></div>
                        </article>
                        <article class="tile" role="listitem">
                            <div class="tile__top">
                                <div class="tile__icon" aria-hidden="true"><img src="imagenes/veterinaria.png" alt=""></div>
                                <div class="tile__label">Proxima cita veterinaria</div>
                            </div>
                            <div class="tile__value"><?= htmlspecialchars($salud['proxima_cita'] ?? '-', ENT_QUOTES, 'UTF-8'); ?></div>
                        </article>
                        <article class="tile" role="listitem">
                            <div class="tile__top">
                                <div class="tile__icon" aria-hidden="true"><img src="imagenes/vacunasmsc.png" alt=""></div>
                                <div class="tile__label">Vacunas</div>
                            </div>
                            <div class="tile__value"><?= htmlspecialchars($salud['vacunas'] ?? '-', ENT_QUOTES, 'UTF-8'); ?></div>
                        </article>
                        <article class="tile" role="listitem">
                            <div class="tile__top">
                                <div class="tile__icon" aria-hidden="true"><img src="imagenes/hrsbaño.png" alt=""></div>
                                <div class="tile__label">Ultimo bano</div>
                            </div>
                            <div class="tile__value"><?= htmlspecialchars($salud['ultimo_bano'] ?? '-', ENT_QUOTES, 'UTF-8'); ?></div>
                        </article>
                        <article class="tile" role="listitem">
                            <div class="tile__top">
                                <div class="tile__icon" aria-hidden="true"><img src="imagenes/higienep.png" alt=""></div>
                                <div class="tile__label">Desparasitacion</div>
                            </div>
                            <div class="tile__value"><?= htmlspecialchars($salud['desparasitacion'] ?? '-', ENT_QUOTES, 'UTF-8'); ?></div>
                        </article>
                    </div>
                </section>
            </section>
        </main>
    </div>

    <?php include 'scripts.php'; ?>
</body>
</html>

