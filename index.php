<?php session_start(); ?>
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inicio</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  
<main>
  <section class="hero" id="inicio">
    <div class="container">
      <h2>Bienvenidos al Congreso Nacional de Gestores Tecnológicos 2023</h2>
      <p>Únete a los líderes tecnológicos más destacados del país en un evento diseñado para compartir conocimientos, experiencias y las últimas tendencias en gestión tecnológica.</p>

      <div class="countdown">
        <div class="countdown-item">
          <span id="days">00</span>
          Días
        </div>
        <div class="countdown-item">
          <span id="hours">00</span>
          Horas
        </div>
        <div class="countdown-item">
          <span id="minutes">00</span>
          Minutos
        </div>
        <div class="countdown-item">
          <span id="seconds">00</span>
          Segundos
        </div>
      </div>

      <a href="#registro" class="btn btn-large">Reserva tu lugar ahora</a>
    </div>
  </section>

  <footer>
    <div class="container">
      <h3>Congreso Nacional de Gestores Tecnológicos</h3>
      <p>Innovación y Transformación Digital: Construyendo el Futuro</p>

      <div class="social-links">
        <a href="#" aria-label="Twitter">🐦</a>
        <a href="#" aria-label="LinkedIn">💼</a>
        <a href="#" aria-label="Facebook">👍</a>
        <a href="#" aria-label="Instagram">📸</a>
      </div>

      <p>&copy; 2023 Congreso Nacional de Gestores Tecnológicos. Todos los derechos reservados.</p>
    </div>
  </footer>
</main>
<script src="js.js"></script>
</body>
</html>
