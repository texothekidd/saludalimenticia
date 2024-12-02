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
    <title>Generar Dieta</title>
</head>
<body>
    <h1>Generación de Dieta Personalizada</h1>
    <p>Aquí se generará una dieta basada en tus datos.</p>
</body>
</html>
