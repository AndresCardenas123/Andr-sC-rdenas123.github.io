<?php
require_once 'db.php';

$sql = "SELECT id, nombre, raza, peso, edad, color, sexo FROM perfil ORDER BY id DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Listado</title>
    <link rel="icon" href="imagenes/LOGO MYPETS.jpg">
    <link rel="stylesheet" href="style.css">
    <style>
        .table-wrap {
            width: 100%;
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
        }
        th, td {
            padding: 12px 14px;
            text-align: left;
            border-bottom: 1px solid #eef2f2;
        }
        th {
            background: #f5fbfb;
            font-weight: 700;
        }
        .actions {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }
        .btn {
            display: inline-block;
            padding: 8px 12px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
        }
        .btn-edit {
            background: #00A896;
            color: #fff;
        }
        .btn-delete {
            background: #e74c3c;
            color: #fff;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="main-container">
        <h2>Perfil de Mascotas</h2>
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Raza</th>
                        <th>Peso</th>
                        <th>Edad</th>
                        <th>Color</th>
                        <th>Sexo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result && $result->num_rows > 0): ?>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?= htmlspecialchars($row['id']) ?></td>
                                <td><?= htmlspecialchars($row['nombre']) ?></td>
                                <td><?= htmlspecialchars($row['raza']) ?></td>
                                <td><?= htmlspecialchars($row['peso']) ?></td>
                                <td><?= htmlspecialchars($row['edad']) ?></td>
                                <td><?= htmlspecialchars($row['color']) ?></td>
                                <td><?= htmlspecialchars($row['sexo']) ?></td>
                                <td class="actions">
                                    <a class="btn btn-edit" href="editar.php?id=<?= urlencode($row['id']) ?>">Editar</a>
                                    <a class="btn btn-delete" href="eliminar.php?id=<?= urlencode($row['id']) ?>" onclick="return confirm('¿Eliminar este registro?');">Eliminar</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="8">No hay registros.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
