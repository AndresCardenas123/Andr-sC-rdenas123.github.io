<?php
session_start();
$showSettings = true;
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}
require_once __DIR__ . '/../MY%20PETS%20PROYECT/Database/database.php';
$pdo = getConnection();
$userId = (int) $_SESSION['user_id'];

$stmt = $pdo->prepare('SELECT nombre FROM perfil WHERE user_id = :uid LIMIT 1');
$stmt->execute([':uid' => $userId]);
$perfil = $stmt->fetch();

$stmt = $pdo->prepare('SELECT * FROM salud WHERE user_id = :uid LIMIT 1');
$stmt->execute([':uid' => $userId]);
$salud = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $frecuencia = trim($_POST['frecuencia_cardiaca'] ?? '');
    $tiempo = trim($_POST['tiempo_activo'] ?? '');
    $proxima = $_POST['proxima_cita'] ?? null;
    $vacunas = trim($_POST['vacunas'] ?? '');
    $ultimo_bano = trim($_POST['ultimo_bano'] ?? '');
    $desparasitacion = trim($_POST['desparasitacion'] ?? '');

    if ($salud) {
        $stmt = $pdo->prepare('UPDATE salud SET frecuencia_cardiaca = :frecuencia, tiempo_activo = :tiempo, proxima_cita = :proxima, vacunas = :vacunas, ultimo_bano = :ultimo_bano, desparasitacion = :desparasitacion WHERE user_id = :uid');
        $stmt->execute([
            ':frecuencia' => $frecuencia,
            ':tiempo' => $tiempo,
            ':proxima' => $proxima ?: null,
            ':vacunas' => $vacunas,
            ':ultimo_bano' => $ultimo_bano,
            ':desparasitacion' => $desparasitacion,
            ':uid' => $userId,
        ]);
    } else {
        $stmt = $pdo->prepare('INSERT INTO salud (user_id, frecuencia_cardiaca, tiempo_activo, proxima_cita, vacunas, ultimo_bano, desparasitacion) VALUES (:uid, :frecuencia, :tiempo, :proxima, :vacunas, :ultimo_bano, :desparasitacion)');
        $stmt->execute([
            ':uid' => $userId,
            ':frecuencia' => $frecuencia,
            ':tiempo' => $tiempo,
            ':proxima' => $proxima ?: null,
            ':vacunas' => $vacunas,
            ':ultimo_bano' => $ultimo_bano,
            ':desparasitacion' => $desparasitacion,
        ]);
    }

    header('Location: salud.php?ok=1');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Salud - My Pets</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="imagenes/LOGO MYPETS.jpg">
    <link rel="stylesheet" href="style.css?v=20260429i">
    <link rel="stylesheet" href="Estilos/theme.css?v=20260429i">
    <script src="theme.js?v=20260429i"></script>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="main-container edit-shell">
      <div class="edit-head">
        <h1>Editar historial de salud de <?= htmlspecialchars($perfil['nombre'] ?? 'tu mascota', ENT_QUOTES, 'UTF-8'); ?></h1>
        <p>Modifica los datos y guarda para volver a la vista de salud.</p>
      </div>

      <form method="POST" action="editar_salud.php" class="edit-grid">
          <div class="field">
              <label for="frecuencia_cardiaca">Frecuencia cardiaca</label>
              <input class="input" id="frecuencia_cardiaca" name="frecuencia_cardiaca" type="text" placeholder="Ej: 70-120 bpm" value="<?= htmlspecialchars($salud['frecuencia_cardiaca'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
          </div>
          <div class="field">
              <label for="tiempo_activo">Tiempo activo</label>
              <input class="input" id="tiempo_activo" name="tiempo_activo" type="text" placeholder="Ej: 30 min diarios" value="<?= htmlspecialchars($salud['tiempo_activo'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
          </div>
          <div class="field">
              <label for="proxima_cita">Proxima cita vet</label>
              <input class="input" id="proxima_cita" name="proxima_cita" type="date" value="<?= htmlspecialchars($salud['proxima_cita'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
          </div>
          <div class="field">
              <label for="vacunas">Vacunas</label>
              <input class="input" id="vacunas" name="vacunas" type="text" placeholder="Ej: Rabia (Ultima: 2024-01-12)" value="<?= htmlspecialchars($salud['vacunas'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
          </div>
          <div class="field">
              <label for="ultimo_bano">Ultimo bano</label>
              <input class="input" id="ultimo_bano" name="ultimo_bano" type="text" placeholder="Ej: Hace 2 semanas" value="<?= htmlspecialchars($salud['ultimo_bano'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
          </div>
          <div class="field">
              <label for="desparasitacion">Desparasitacion</label>
              <input class="input" id="desparasitacion" name="desparasitacion" type="text" placeholder="Ej: Cada 3 meses" value="<?= htmlspecialchars($salud['desparasitacion'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
          </div>

          <div class="field edit-actions">
              <button class="btn btn-primary" type="submit">Guardar cambios</button>
              <a class="btn btn-ghost" href="salud.php">Volver</a>
          </div>
      </form>
    </div>

    <?php include 'scripts.php'; ?>
</body>
</html>
