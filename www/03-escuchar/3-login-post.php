<?php
// =====================================================================
//  NIVEL 3 · EL LOGIN CORRECTO (con POST)
//  Los datos viajan en el CUERPO de la petición, no en la URL.
//  PHP los recibe en el array $_POST.
// =====================================================================

$enviado = ($_SERVER['REQUEST_METHOD'] === 'POST');   // ¿llegó el formulario?
$clave   = $_POST['clave'] ?? '';
$secreta = 'forja2026';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Nivel 3 · Login con POST</title>
  <link rel="stylesheet" href="/assets/fogon.css">
</head>
<body>
<main>
  <div class="migas"><a href="/">🔥 inicio</a> / <a href="/03-escuchar/">nivel 3</a> / 3-login-post.php</div>
  <div class="kicker">NIVEL 3 · LOGIN CON POST</div>
  <h1>🔐 La bóveda (versión correcta)</h1>
  <div class="tarjeta">
    <form method="post">
      <label>Contraseña <input type="password" name="clave"></label>
      <button>Entrar</button>
    </form>
  </div>
  <?php if ($enviado): ?>
    <?php if ($clave === $secreta): ?>
      <div class="tarjeta fuego"><p class="grande">✅ Entraste a la bóveda</p></div>
    <?php else: ?>
      <div class="alerta">❌ Contraseña incorrecta</div>
    <?php endif; ?>
    <p class="nota">👀 Mirá la URL: limpia. Los datos viajaron en el cuerpo de la petición (F12 → Red → la petición → Carga útil).<br>
    Ojo: POST <b>no cifra</b> nada. Lo que protege la contraseña en el camino es <b>HTTPS</b>.</p>
  <?php endif; ?>
</main>
</body>
</html>
