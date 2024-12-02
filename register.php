<?php
// Configuración de la conexión a Azure Database for MySQL
$servername = "tuservidormysqldatabase"; // Cambia por el nombre de tu servidor
$username = "tu_usuario@tu_servidor";
$password = "tu_contraseña";
$dbname = "salud_alimenticia";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesar formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $contraseña = password_hash($_POST["contraseña"], PASSWORD_BCRYPT);
    $peso = $_POST["peso"];
    $talla = $_POST["talla"];
    $objetivo = $_POST["objetivo"];

    $sql = "INSERT INTO usuarios (nombre, correo, contraseña, peso, talla, objetivo)
            VALUES ('$nombre', '$correo', '$contraseña', '$peso', '$talla', '$objetivo')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso. <a href='login.php'>Inicia sesión aquí</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario</title>
</head>
<body>
    <h1>Regístrate</h1>
    <form method="POST" action="register.php">
        Nombre: <input type="text" name="nombre" required><br>
        Correo: <input type="email" name="correo" required><br>
        Contraseña: <input type="password" name="contraseña" required><br>
        Peso: <input type="number" name="peso" required><br>
        Talla: <input type="number" name="talla" required><br>
        Objetivo: <select name="objetivo" required>
            <option value="bajar">Bajar peso</option>
            <option value="mantener">Mantener peso</option>
            <option value="subir">Subir peso</option>
        </select><br>
        <input type="submit" value="Registrarse">
    </form>
</body>
</html>
