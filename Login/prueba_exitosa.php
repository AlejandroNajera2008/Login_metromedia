<?php
session_start();
$mensaje = $_SESSION['mensaje'] ?? "Acceso autorizado.";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prueba Exitosa</title>
  <style>
    body {
      margin: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #0a0f1c;
      color: #3b82f6;
      font-family: Arial, sans-serif;
    }
    h1 {
      font-size: 36px;
      text-shadow: 0 0 10px rgba(59,130,246,0.8);
      animation: glow 2s infinite alternate;
    }
    @keyframes glow {
      from { text-shadow: 0 0 10px rgba(59,130,246,0.8); }
      to   { text-shadow: 0 0 20px rgba(59,130,246,1); }
    }
  </style>
</head>
<body>
  <h1><?php echo htmlspecialchars($mensaje); ?></h1>
</body>
</html>
