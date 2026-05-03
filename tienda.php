<?php session_start(); $activePage = 'tienda'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda - My Pets</title>
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
                <a class="pill active" href="tienda.php">Alimentos</a>
                <a class="pill" href="juguetes.php">Juguetes</a>
                <a class="pill" href="antipulgas.php">Antipulgas</a>
                <a class="pill" href="accesorios.php">Accesorios</a>
                <a class="pill" href="higiene.php">Higiene</a>
            </div>
        </section>

        <section class="store-products">
            <h2>ALIMENTOS</h2>
            <div class="product-grid">
            <!-- productos existentes conservados -->
            <?php
            // Para mantener el contenido original, dejamos el HTML estatico
            ?>
            <div class="product-item">
                <img src="imagenes/dogchowcp.png" alt="Producto 1">
                <p>DOG CHOW</p>
                <p>Perros Senior Vida Sana</p>
                <p>Bolsas de 17Kg, 8Kg, 4Kg y 2Kg</p>
                <a class="cta" href="dogchow.html">Ver detalles</a>
            </div>
            <div class="product-item">
                <img src="imagenes/nulocp.png" alt="Producto 2">
                <p>NULO DOG GRAIN FREE</p>
                <p>Adulto Pavo y Patatas dulces</p>
                <p>Bolsas de 2.0Kg, 4.9Kg y 10.8Kg</p>
                <a class="cta" href="nulodog.html">Ver detalles</a>
            </div>
            <div class="product-item">
                <img src="imagenes/chunkycp.png" alt="Producto 3">
                <p>CHUNKY</p>
                <p>Perros adultos pollo y arroz</p>
                <p>Bolsas de 25Kg, 9Kg, 4Kg y 2Kg</p>
                <a class="cta" href="chunky.html">Ver detalles</a>
            </div>
            <div class="product-item">
                <img src="imagenes/pedigree.png" alt="Producto 4">
                <p>PEDIGREE</p>
                <p>Alimento humedo para perro cachorro</p>
                <p>Carne sobre 100g</p>
                <a class="cta" href="pedigree.html">Ver detalles</a>
            </div>
            <div class="product-item">
                <img src="imagenes/maxcatcg.png" alt="Producto 5">
                <p>MAX CAT</p>
                <p>Gatos adultos, pollo y arroz</p>
                <p>10.1Kg</p>
                <a class="cta" href="maxcat.html">Ver detalles</a>
            </div>
            <div class="product-item">
                <img src="imagenes/agility.png" alt="Producto 6">
                <p>AGILITY GOLD</p>
                <p>Gatos sin granos</p>
                <p>Bolsas de 7Kg, 3Kg, 1.5Kg y 500G</p>
                <a class="cta" href="agilityg.html">Ver detalles</a>
            </div>
            <div class="product-item">            
                <img src="imagenes/hills.png" alt="Producto 7">
                <p>HILLS PRESCRIPTION DIET</p>
                <p>Gatos Digestive Care i/d</p>
                <p>Lata de 5.5 Oz</p>
                <a class="cta" href="hills.html">Ver detalles</a>
            </div>
            <div class="product-item">
                <img src="imagenes/monello.png" alt="Producto 8">
                <p>MONELLO CAT</p>
                <p>Salmon, atun y pollo</p>
                <p>Bolsa de 7Kg</p>
                <a class="cta" href="monello.html">Ver detalles</a>
            </div>
            <div class="product-item">
                <img src="imagenes/nutrangg.png" alt="Producto 9">
                <p>NUTRA-NUGGETS</p>
                <p>Formula de Mantenimiento para Gatos</p>
                <p>Bolsas de 1Kg, 3Kg y 7.5 Kg</p>
                <a class="cta" href="nutran.html">Ver detalles</a>
            </div>
            <div class="product-item">
                <img src="imagenes/felix.png" alt="Producto 10">
                <p>FELIX</p>
                <p>Comida Humeda Gatos Pate Salmon</p>
                <p>156G</p>
                <a class="cta" href="felix.html">Ver detalles</a>
            </div>
            </div>
        </section>
    </div>

    <?php include 'scripts.php'; ?>
</body>
</html>



