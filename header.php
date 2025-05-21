<header>
  <div class="top-bar">
    <div class="login-container">
      <?php if (!isset($_SESSION['username'])): ?>
        <a href="login.php" class="login-link">Iniciar sesión</a>
      <?php else: ?>
        <span>👋 <?php echo $_SESSION['username']; ?></span>
        <a href="logout.php" class="logout-link">Cerrar sesión</a>
      <?php endif; ?>
    </div>
  </div>

  <nav>
    <a href="index.php">Inicio</a>
    <a href="acerca.php">Acerca</a>
    <a href="ponentes.php">Ponentes</a>
    <a href="agenda.php">Agenda</a>
    <a href="contacto.php">Contacto</a>

    <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'ponente'): ?>
      <a href="subir_ponencia.php" style="color: #ffcc00;">📄 Subir ponencia</a>
    <?php endif; ?>
  </nav>
</header>