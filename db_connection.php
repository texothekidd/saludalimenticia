<?php
// Configuración de conexión usando PDO
function getPDOConnection() {
    $server = "tcp:tuservidormysqldatabase.database.windows.net,1433"; // Cambia por tu servidor
    $database = "salud_alimenticia"; // Cambia por el nombre de tu base de datos
    $username = "CloudSA09260827"; // Cambia por tu usuario
    $password = "{your_password_here}"; // Cambia por tu contraseña

    try {
        $conn = new PDO("sqlsrv:server=$server;Database=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        die("Error conectando a la base de datos: " . $e->getMessage());
    }
}

// Configuración de conexión usando SQL Server Extension
function getSQLSRVConnection() {
    $connectionInfo = array(
        "UID" => "CloudSA09260827", // Cambia por tu usuario
        "pwd" => "{your_password_here}", // Cambia por tu contraseña
        "Database" => "salud_alimenticia", // Cambia por tu base de datos
        "LoginTimeout" => 30,
        "Encrypt" => 1,
        "TrustServerCertificate" => 0
    );
    $serverName = "tcp:tuservidormysqldatabase.database.windows.net,1433"; // Cambia por tu servidor

    $conn = sqlsrv_connect($serverName, $connectionInfo);
    if ($conn === false) {
        die(print_r(sqlsrv_errors(), true));
    }
    return $conn;
}
?>
