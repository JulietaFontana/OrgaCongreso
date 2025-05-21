<?php
session_start();
if ($_SESSION['rol'] != 'admin') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><title>Panel Admin</title><link rel="stylesheet" href="styles.css"></head>
<body><div class="container"><h2>Panel del Administrador</h2>
<p>Bienvenido, <?php echo $_SESSION['username']; ?></p>
<a href="logout.php" class="btn">Cerrar sesión</a>
</div></body></html>