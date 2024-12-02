<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION["usuario"]; ?>!</h1>
    <a href="dietas.php">Generar Dieta</a><br>
    <a href="progreso.php">Registrar Progreso</a><br>
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>
