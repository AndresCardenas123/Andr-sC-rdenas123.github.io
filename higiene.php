<?php session_start(); $activePage = 'tienda'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Higiene - My Pets</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="imagenes/LOGO MYPETS.jpg">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Estilos/styletienda.css">
    <link rel="stylesheet" href="Estilos/theme.css?v=20260429f">
    <script src="theme.js?v=20260429f"></script>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="main-container">
        <section class="store-categories">
            <h2>CATEGORIAS</h2>
            <div class="pill-bar">
                <a class="pill" href="tienda.php">Alimentos</a>
                <a class="pill" href="juguetes.php">Juguetes</a>
                <a class="pill" href="antipulgas.php">Antipulgas</a>
                <a class="pill" href="accesorios.php">Accesorios</a>
                <a class="pill active" href="higiene.php">Higiene</a>
            </div>
        </section>

        <section class="store-products">
            <h2>HIGIENE</h2>
            <p>Contenido en preparacion.</p>
        </section>
    </div>

    <?php include 'scripts.php'; ?>
</body>
</html>
