<?php session_start(); $activePage = 'tienda'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juguetes - My Pets</title>
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
                <a class="pill active" href="juguetes.php">Juguetes</a>
                <a class="pill" href="antipulgas.php">Antipulgas</a>
                <a class="pill" href="accesorios.php">Accesorios</a>
                <a class="pill" href="higiene.php">Higiene</a>
            </div>
        </section>

        <section class="store-products">
            <h2>JUGUETES</h2>
            <div class="product-grid">
                <div class="product-item">
                    <img src="imagenes/trixie.png" alt="Producto 1">
                    <p>TRIXIE</p>
                    <p>Bola Neon Flotante</p>
                    <p>4.5 cm</p>
                    <p>Precio: <strong>$5.638</strong></p>
                    <h6>CODIGO #34430000</h6>
                </div>
                <div class="product-item">
                    <img src="imagenes/canball.png" alt="Producto 2">
                    <p>CAN BALL</p>
                    <p>Bola Maciza Can Ball</p>
                    <p>Precio: <strong>$10.868</strong></p>
                    <h6>CODIGO #33441600</h6>
                </div>
                <div class="product-item">
                    <img src="imagenes/trixieser.png" alt="Producto 3">
                    <p>TRIXIE SERPIENTE</p>
                    <p>Juguete Trixie Serpiente Snacks</p>
                    <p>para perro Tpr de 18 cm</p>
                    <p>Precio: <strong>$21.424</strong></p>
                    <h6>CODIGO #34950000</h6>
                </div>
                <div class="product-item">
                    <img src="imagenes/lazoball.png" alt="Producto 4">
                    <p>ROPE BALL</p>
                    <p>Bola Rope Ball (lazo)</p>
                    <p>Precio: <strong>$16.660</strong></p>
                    <h6>CODIGO #33331760</h6>
                </div>
                <div class="product-item">
                    <img src="imagenes/peluche.png" alt="Producto 5">
                    <p>ANIMAL PELUCHE</p>
                    <p>Juguete animalitos peluche</p>
                    <p>Precio: <strong>$13.747</strong></p>
                    <h6>CODIGO #33246600</h6>
                </div>
                <div class="product-item">
                    <img src="imagenes/huesopel.png" alt="Producto 6">
                    <p>TRIXIE HUESO</p>
                    <p>Hueso de juguete para Perro con Sonidos</p>
                    <p>Precio: <strong>$22.274</strong></p>
                    <h6>CODIGO #33181100</h6>
                </div>
                <div class="product-item">
                    <img src="imagenes/erizo.png" alt="Producto 7">
                    <p>ERIZO</p>
                    <p>Juguete Erizo vinilo Pequeno para perro</p>
                    <p>Precio: <strong>$8.816</strong></p>
                    <h6>CODIGO #3369762</h6>
                </div>
                <div class="product-item">
                    <img src="imagenes/licksnack.png" alt="Producto 8">
                    <p>TRIXIE SNAK</p>
                    <p>Pelota Lick And Snak 8cm</p>
                    <p>Precio: <strong>$45.828</strong></p>
                    <h6>CODIGO #33331920</h6>
                </div>
                <div class="product-item">
                    <img src="imagenes/discohule.png" alt="Producto 9">
                    <p>FRISBE HUESO</p>
                    <p>Juguete para perro en caucho natural pet love</p>
                    <p>Precio: <strong>$23.999</strong></p>
                    <h6>CODIGO #33330404</h6>
                </div>
                <div class="product-item">
                    <img src="imagenes/sapito.png" alt="Producto 10">
                    <p>SAPITO VINILO</p>
                    <p>Juguete vinilo sapito</p>
                    <p>Precio: <strong>$6.210</strong></p>
                    <h6>CODIGO #33330696</h6>
                </div>
            </div>
        </section>
    </div>

    <?php include 'scripts.php'; ?>
</body>
</html>
