<?php
$host = "localhost";   // Servidor
$user = "root";        // Usuario MySQL
$pass = "";            // Contraseña MySQL (ajústala si tu MySQL tiene clave)
$db   = "login"; // Reemplaza por el nombre real de tu BD

$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
else {
    echo "conexion exitosa";
}
?>
