<?php
require("conexiondb.php");
session_start();

$email      = $_POST['email'] ?? '';
$contrasena = $_POST['clave'] ?? '';

$email_safe      = $conn->real_escape_string($email);
$contrasena_safe = $conn->real_escape_string($contrasena);

$sql = "SELECT * FROM `usuario` 
        WHERE `email` = '$email_safe' AND `contrasena` = '$contrasena_safe' 
        LIMIT 1";

$result = $conn->query($sql);

if ($result && $result->num_rows === 1) {
    $_SESSION['usuario'] = $email;
    $_SESSION['mensaje'] = "Login exitoso. Bienvenido, $email";
    header("Location: prueba_exitosa.php");
    exit;
} else {
    echo "Correo o contraseña incorrectos.";
}

$conn->close();
?>
