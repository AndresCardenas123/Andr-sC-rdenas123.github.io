<?php session_start(); $activePage = 'tienda'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antipulgas - My Pets</title>
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
                <a class="pill active" href="antipulgas.php">Antipulgas</a>
                <a class="pill" href="accesorios.php">Accesorios</a>
                <a class="pill" href="higiene.php">Higiene</a>
            </div>
        </section>

        <section class="store-products">
            <h2>ANTIPULGAS</h2>
            <div class="product-grid">
                <div class="product-item">
                    <img src="imagenes/nexgard.png" alt="Producto 1">
                    <p>NEXGARD SPECTRA</p>
                    <p>Nexgard Spectra Antiparasitario interno y externo para perros</p>
                    <p>De 15 a 30 Kg</p>
                    <p>Precio: <strong>$64.424</strong></p>
                    <h6>CODIGO #51510004</h6>
                </div>
                <div class="product-item">
                    <img src="imagenes/bravecto.png" alt="Producto 2">
                    <p>BRAVECTO ANTIPARASITARIO</p>
                    <p>Bravecto Antiparasitario Perros</p>
                    <p>De 20 a 40 Kg Tableta 1000mg</p>
                    <p>Precio: <strong>$97.202</strong></p>
                    <h6>CODIGO #51510034</h6>
                </div>
                <div class="product-item">
                    <img src="imagenes/comfortis.png" alt="Producto 3">
                    <p>COMFORTIS ANTIPULGAS</p>
                    <p>Comfortis antipulgas para perros y gatos</p>
                    <p>270 mg</p>
                    <p>Precio: <strong>$23.137</strong></p>
                    <h6>CODIGO #51514104</h6>
                </div>
                <div class="product-item">
                    <img src="imagenes/comfortis2.png" alt="Producto 4">
                    <p>COMFORTIS ANTIPULGAS</p>
                    <p>Comfortis antipulgas para perros y gatos</p>
                    <p>140 mg</p>
                    <p>Precio: <strong>$21.331</strong></p>
                    <h6>CODIGO #51514105</h6>
                </div>
                <div class="product-item">
                    <img src="imagenes/simparica.png" alt="Producto 5">
                    <p>SIMPARICA</p>
                    <p>Simparica Antiparasitario Perros</p>
                    <p>(De 20 a 40 Kg) 1 tableta de 80 mg</p>
                    <p>Precio: <strong>$35.069</strong></p>
                    <h6>CODIGO #51510040</h6>
                </div>
                <div class="product-item">
                    <img src="imagenes/credelio.png" alt="Producto 6">
                    <p>CREDELIO</p>
                    <p>Credelio Comprimido Masticable</p>
                    <p>Por 225 mg para perros de (5.5 a 11kg) 3 Tb Naranja</p>
                    <p>Precio: <strong>$73.431</strong></p>
                    <h6>CODIGO #51510003</h6>
                </div>
                <div class="product-item">
                    <img src="imagenes/sinpulgar.png" alt="Producto 7">
                    <p>SINPULGAR</p>
                    <p>Antipulgas para perros y gatos</p>
                    <p>409.8 mg 6 tabletas</p>
                    <p>Precio: <strong>$53.679</strong></p>
                    <h6>CODIGO #51510022</h6>
                </div>
                <div class="product-item">
                    <img src="imagenes/asuntol.png" alt="Producto 8">
                    <p>JABON ASUNTOL</p>
                    <p>Asuntol Jabon Antipulgas Perros Sabila + Jabonera</p>
                    <p>90 g</p>
                    <p>Precio: <strong>$11.920</strong></p>
                    <h6>CODIGO #51510002</h6>
                </div>
                <div class="product-item">
                    <img src="imagenes/comfortis3.png" alt="Producto 9">
                    <p>COMFORTIS ANTIPULGAS</p>
                    <p>Comfortis Antipulgas para Perros</p>
                    <p>810 mg (de 18.1 a 27.2kg)</p>
                    <p>Precio: <strong>$30.701</strong></p>
                    <h6>CODIGO #51510113</h6>
                </div>
                <div class="product-item">
                    <img src="imagenes/nexgard2.png" alt="Producto 10">
                    <p>NEXGARD SPECTRA</p>
                    <p>Nexgard Spectra Antiparasitario interno y externo para perros</p>
                    <p>de 2 a 3.5 Kg</p>
                    <p>Precio: <strong>$41.784</strong></p>
                    <h6>CODIGO #51514801</h6>
                </div>
            </div>
        </section>
    </div>

    <?php include 'scripts.php'; ?>
</body>
</html>
