<?php
require_once 'db.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: perfil_index.php');
    exit;
}

$id = (int) $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $raza   = $_POST['raza'] ?? '';
    $peso   = $_POST['peso'] ?? '';
    $edad   = $_POST['edad'] ?? '';
    $color  = $_POST['color'] ?? '';
    $sexo   = $_POST['sexo'] ?? '';

    $stmt = $conn->prepare("UPDATE perfil SET nombre = ?, raza = ?, peso = ?, edad = ?, color = ?, sexo = ? WHERE id = ?");
    $stmt->bind_param("ssssssi", $nombre, $raza, $peso, $edad, $color, $sexo, $id);
    $stmt->execute();
    $stmt->close();

    header('Location: perfil_index.php?msg=actualizado');
    exit;
}

$stmt = $conn->prepare("SELECT id, nombre, raza, peso, edad, color, sexo FROM perfil WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$stmt->close();

if (!$row) {
    header('Location: perfil_index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <link rel="icon" href="imagenes/LOGO MYPETS.jpg">
    <link rel="stylesheet" href="style.css">
    <style>
        form {
            display: grid;
            gap: 12px;
        }
        input {
            padding: 10px;
            border: 1px solid #c9dcdc;
            border-radius: 8px;
        }
        button {
            background: #00A896;
            color: #fff;
            border: none;
            padding: 10px 14px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="main-container">
        <h2>Editar Perfil</h2>
        <form method="POST">
            <input type="text" name="nombre" placeholder="Nombre" value="<?= htmlspecialchars($row['nombre']) ?>">
            <input type="text" name="raza" placeholder="Raza" value="<?= htmlspecialchars($row['raza']) ?>">
            <input type="text" name="peso" placeholder="Peso" value="<?= htmlspecialchars($row['peso']) ?>">
            <input type="text" name="edad" placeholder="Edad" value="<?= htmlspecialchars($row['edad']) ?>">
            <input type="text" name="color" placeholder="Color" value="<?= htmlspecialchars($row['color']) ?>">
            <input type="text" name="sexo" placeholder="Sexo" value="<?= htmlspecialchars($row['sexo']) ?>">
            <button type="submit">Guardar Cambios</button>
        </form>
    </div>
</body>
</html>
