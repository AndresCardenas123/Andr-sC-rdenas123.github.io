<?php
$activePage = $activePage ?? '';
$showSettings = $showSettings ?? in_array($activePage, ['tienda', 'salud', 'perfil'], true);
?>
<header class="top-menu">
  <div class="nav-inner nav-inner--with-settings">
    <a class="nav-logo nav-logo--brand" href="tienda.php">
      <img src="imagenes/LOGO MYPETS.jpg" alt="My Pets logo">
      <span>MY PETS</span>
    </a>

    <nav class="nav-links" aria-label="Navegacion principal">
      <a class="<?= $activePage === 'tienda' ? 'is-active' : ''; ?>" href="tienda.php">Tienda</a>
      <a class="<?= $activePage === 'salud' ? 'is-active' : ''; ?>" href="salud.php">Salud</a>
      <a class="<?= $activePage === 'perfil' ? 'is-active' : ''; ?>" href="perfil.php">Perfil</a>
    </nav>

    <?php if ($showSettings): ?>
      <a class="nav-settings" href="config.php" aria-label="Ir a configuracion">
        <img src="imagenes/settings.png" alt="Ajustes">
      </a>
    <?php else: ?>
      <span class="nav-settings nav-settings--placeholder" aria-hidden="true"></span>
    <?php endif; ?>
  </div>
</header>
