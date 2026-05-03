<?php
session_start();
$activePage = 'perfil';
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}
require_once __DIR__ . '/../MY%20PETS%20PROYECT/Database/database.php';
$pdo = getConnection();
$userId = (int) $_SESSION['user_id'];

$stmt = $pdo->prepare('SELECT id, nombre, raza, peso, edad, color, sexo FROM perfil WHERE user_id = :uid LIMIT 1');
$stmt->execute([':uid' => $userId]);
$perfil = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - My Pets</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="imagenes/LOGO MYPETS.jpg">
    <link rel="stylesheet" href="style.css?v=20260429c">
    <link rel="stylesheet" href="Estilos/styleperf.css?v=20260429g">
    <link rel="stylesheet" href="Estilos/theme.css?v=20260429f">
    <script src="theme.js?v=20260429f"></script>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="main-container">
        <main class="profile-read">
            <section class="pet-card pet-card--center" aria-label="Carnet de mascota">
                <div class="pet-card__layout">
                    <div class="pet-identity">
                        <img class="pet-avatar pet-avatar--lg" src="imagenes/perfil.jpg" alt="Foto de mascota">
                        <div class="pet-title pet-title--center">
                            <div class="pet-title__name">
                                <?= htmlspecialchars($perfil['nombre'] ?? 'Mi Mascota', ENT_QUOTES, 'UTF-8'); ?>
                            </div>
                            <div class="pet-title__meta">MY PETS | ID Card</div>
                        </div>

                        <div class="pet-actions">
                            <a class="btn btn-primary" href="editar_perfil.php">Editar perfil</a>
                        </div>
                    </div>

                    <div class="pet-summary">
                        <h2 class="pet-summary__heading">Datos de tu mascota</h2>
                        <p class="pet-summary__copy">Vista de solo lectura para consultar rapidamente la informacion principal antes de editarla.</p>

                        <div class="pet-stats">
                            <div class="stat">
                                <div class="stat__icon" aria-hidden="true"><img src="imagenes/perfil.jpg" alt=""></div>
                                <div>
                                    <div class="stat__label">Raza</div>
                                    <div class="stat__value"><?= htmlspecialchars($perfil['raza'] ?? '-', ENT_QUOTES, 'UTF-8'); ?></div>
                                </div>
                            </div>
                            <div class="stat">
                                <div class="stat__icon" aria-hidden="true"><img src="imagenes/facturacion.jpg" alt=""></div>
                                <div>
                                    <div class="stat__label">Peso</div>
                                    <div class="stat__value"><?= htmlspecialchars($perfil['peso'] ?? '-', ENT_QUOTES, 'UTF-8'); ?></div>
                                </div>
                            </div>
                            <div class="stat">
                                <div class="stat__icon" aria-hidden="true"><img src="imagenes/calificanos.png" alt=""></div>
                                <div>
                                    <div class="stat__label">Edad</div>
                                    <div class="stat__value"><?= htmlspecialchars($perfil['edad'] ?? '-', ENT_QUOTES, 'UTF-8'); ?></div>
                                </div>
                            </div>
                            <div class="stat">
                                <div class="stat__icon" aria-hidden="true"><img src="imagenes/lapizedit.png" alt=""></div>
                                <div>
                                    <div class="stat__label">Color</div>
                                    <div class="stat__value"><?= htmlspecialchars($perfil['color'] ?? '-', ENT_QUOTES, 'UTF-8'); ?></div>
                                </div>
                            </div>
                            <div class="stat">
                                <div class="stat__icon" aria-hidden="true"><img src="imagenes/privacidad.png" alt=""></div>
                                <div>
                                    <div class="stat__label">Sexo</div>
                                    <div class="stat__value"><?= htmlspecialchars($perfil['sexo'] ?? '-', ENT_QUOTES, 'UTF-8'); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <?php include 'scripts.php'; ?>
</body>
</html>

