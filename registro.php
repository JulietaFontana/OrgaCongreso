<?php session_start(); ?>
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registro</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  
  <main>
    <section id="registro">
    <div class="container">
        <h2>Registro de Usuario</h2>
        <form method="POST" action="insertar_usuario.php">
            <div class="form-group">
                <label for="username">Nombre de usuario</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="rol">Rol</label>
                <select id="rol" name="rol" required>
                    <option value="">Seleccione un rol</option>
                    <option value="organizador">Organizador</option>
                    <option value="ponente">Ponente</option>
                    <option value="evaluador">Evaluador</option>
                    <option value="asistente">Asistente</option>
                    <option value="auspiciante">Auspiciante</option>
                    <option value="expositor">Expositor</option>
                </select>
            </div>
            <button type="submit" class="btn">Registrarse</button>
        </form>
    </div>
</section>
</main>
</body>
</html>