<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Azul</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="login-box">
    <h2>¡ACCESO!</h2>

    <!-- El form ahora apunta a prueba_exitosa.php -->
    <form action="login.php" method="POST">
      <label class="input-container">
        <i class="fa-solid fa-at"></i>
        <input  name="email" placeholder="Correo electrónico" required>
      </label>

      <label class="input-container">
        <i class="fa-solid fa-lock"></i>
        <input type="password" name="clave" placeholder="Contraseña" required>
      </label>
     
      <!-- Botón de envío -->
      <button type="submit" class="btn">ACCEDER</button>
    </form>

    <a href="#" class="forgot">¿Olvidaste tu contraseña?</a>
  </div>
</body>
</html>
