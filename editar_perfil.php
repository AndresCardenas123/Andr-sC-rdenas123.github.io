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

$stmt = $pdo->prepare('SELECT id, nombre, raza, peso, edad, color, sexo FROM perfil WHERE user_id = :uid LIMIT 1');
$stmt->execute([':uid' => $userId]);
$perfil = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre'] ?? '');
    $raza   = trim($_POST['raza'] ?? '');
    $peso   = trim($_POST['peso'] ?? '');
    $edad   = trim($_POST['edad'] ?? '');
    $color  = trim($_POST['color'] ?? '');
    $sexo   = trim($_POST['sexo'] ?? '');

    if ($perfil) {
        $stmt = $pdo->prepare('UPDATE perfil SET nombre = :nombre, raza = :raza, peso = :peso, edad = :edad, color = :color, sexo = :sexo WHERE user_id = :uid');
        $stmt->execute([
            ':nombre' => $nombre,
            ':raza' => $raza,
            ':peso' => $peso,
            ':edad' => $edad,
            ':color' => $color,
            ':sexo' => $sexo,
            ':uid' => $userId,
        ]);
    } else {
        $stmt = $pdo->prepare('INSERT INTO perfil (user_id, nombre, raza, peso, edad, color, sexo) VALUES (:uid, :nombre, :raza, :peso, :edad, :color, :sexo)');
        $stmt->execute([
            ':uid' => $userId,
            ':nombre' => $nombre,
            ':raza' => $raza,
            ':peso' => $peso,
            ':edad' => $edad,
            ':color' => $color,
            ':sexo' => $sexo,
        ]);
    }

    header('Location: perfil.php?ok=1');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil - My Pets</title>
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
        <h1>Editar perfil de <?= htmlspecialchars($perfil['nombre'] ?? 'tu mascota', ENT_QUOTES, 'UTF-8'); ?></h1>
        <p>Actualiza los datos basicos y guarda los cambios.</p>
      </div>

      <form method="POST" action="editar_perfil.php" class="form-grid">
          <div class="field">
              <label for="nombre">Nombre</label>
              <input class="input" id="nombre" name="nombre" type="text" placeholder="Ej: Draco" value="<?= htmlspecialchars($perfil['nombre'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
          </div>
          <div class="field">
              <label for="raza">Raza</label>
              <input class="input" id="raza" name="raza" type="text" placeholder="Ej: Labrador" value="<?= htmlspecialchars($perfil['raza'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
          </div>
          <div class="field">
              <label for="peso">Peso</label>
              <input class="input" id="peso" name="peso" type="text" placeholder="Ej: 30 kg" value="<?= htmlspecialchars($perfil['peso'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
          </div>
          <div class="field">
              <label for="edad">Edad</label>
              <input class="input" id="edad" name="edad" type="text" placeholder="Ej: 5 anos" value="<?= htmlspecialchars($perfil['edad'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
          </div>
          <div class="field">
              <label for="color">Color</label>
              <input class="input" id="color" name="color" type="text" placeholder="Ej: Dorado" value="<?= htmlspecialchars($perfil['color'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
          </div>
          <div class="field">
              <label for="sexo">Sexo</label>
              <input class="input" id="sexo" name="sexo" type="text" placeholder="Ej: Macho" value="<?= htmlspecialchars($perfil['sexo'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
          </div>

          <div class="field edit-actions">
              <button class="btn btn-primary" type="submit">Guardar cambios</button>
              <a class="btn btn-ghost" href="perfil.php">Cancelar</a>
          </div>
      </form>
    </div>

    <?php include 'scripts.php'; ?>
</body>
</html>
