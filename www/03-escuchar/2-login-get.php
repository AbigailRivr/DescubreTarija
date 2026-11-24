<?php
// =====================================================================
//  NIVEL 3 · EL LOGIN EQUIVOCADO (con GET)
//  Funciona… pero la contraseña queda a la vista. ¡Mirá la URL!
// =====================================================================

$clave   = $_GET['clave'] ?? null;
$secreta = 'forja2026';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Nivel 3 · Login con GET</title>
  <link rel="stylesheet" href="/assets/fogon.css">
</head>
<body>
<main>
  <div class="migas"><a href="/">🔥 inicio</a> / <a href="/03-escuchar/">nivel 3</a> / 2-login-get.php</div>
  <div class="kicker">NIVEL 3 · LOGIN CON GET</div>
  <h1>🔓 La bóveda (versión equivocada)</h1>
  <div class="tarjeta">
    <form method="get">
      <label>Contraseña <input type="password" name="clave"></label>
      <button>Entrar</button>
    </form>
    <p class="nota">Pista: la contraseña es <code>forja2026</code>.</p>
  </div>
  <?php if ($clave !== null): ?>
    <?php if ($clave === $secreta): ?>
      <div class="tarjeta fuego"><p class="grande">✅ Entraste a la bóveda</p></div>
    <?php else: ?>
      <div class="alerta">❌ Contraseña incorrecta</div>
    <?php endif; ?>
    <div class="alerta" style="margin-top:1rem">⚠️ Mirá la barra de direcciones: <b>tu contraseña está escrita en la URL</b>.
      Queda en el historial del navegador, en los registros del servidor… y la ve cualquiera que mire tu pantalla.</div>
  <?php endif; ?>
</main>
</body>
</html>
