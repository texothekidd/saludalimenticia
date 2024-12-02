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
    <title>Registrar Progreso</title>
</head>
<body>
    <h1>Registrar Progreso</h1>
    <p>Aquí podrás registrar tu peso y ver tu progreso en gráficos.</p>
</body>
</html>
