<?php
// =====================================================================
//  NIVEL 3 · ESCUCHAR: el Oráculo de FORJA (formulario con GET)
//  El formulario manda los datos en la URL:  1-oraculo.php?nombre=Ana&pregunta=...
//  PHP los recibe en el array $_GET.
// =====================================================================

$respuestas = [
    'Sí, sin ninguna duda. ✅',
    'Mmm… mejor preguntá después del café. ☕',
    'Las estrellas dicen que NO. ❌',
    'Solo si estudiás PHP esta noche. 📚',
    'Es muy probable. 🔮',
    'El servidor está pensando… no. 🤖',
];

// ?? significa: "si no existe, usá este valor por defecto"
$nombre   = $_GET['nombre']   ?? '';
$pregunta = $_GET['pregunta'] ?? '';

$respuesta = '';
if ($nombre !== '' && $pregunta !== '') {
    $respuesta = $respuestas[array_rand($respuestas)];   // una al azar
}

// 🛡️ htmlspecialchars: un ESCUDO para mostrar texto que escribió el usuario.
//    Mañana vamos a ver por qué es tan importante. Por ahora: usalo siempre.
function e($texto) { return htmlspecialchars($texto, ENT_QUOTES, 'UTF-8'); }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Nivel 3 · El Oráculo</title>
  <link rel="stylesheet" href="/assets/fogon.css">
</head>
<body>
<main>
  <div class="migas"><a href="/">🔥 inicio</a> / <a href="/03-escuchar/">nivel 3</a> / 1-oraculo.php</div>
  <div class="kicker">NIVEL 3 · ESCUCHAR (GET)</div>
  <h1>🔮 El Oráculo de FORJA</h1>

  <div class="tarjeta">
    <!-- method="get": los datos viajan EN LA URL -->
    <form method="get" action="">
      <label>Tu nombre <input name="nombre" value="<?= e($nombre) ?>" required></label>
      <label>Tu pregunta (de sí o no) <input name="pregunta" value="<?= e($pregunta) ?>" required></label>
      <button>Consultar al Oráculo</button>
    </form>
  </div>

  <?php if ($respuesta !== ''): ?>
    <div class="tarjeta fuego">
      <p><?= e($nombre) ?>, preguntaste: «<?= e($pregunta) ?>»</p>
      <p class="grande"><?= $respuesta ?></p>
    </div>
    <p class="nota">👀 Mirá la barra de direcciones: <b>tu pregunta está en la URL</b>. Eso es GET.</p>
  <?php endif; ?>
</main>
</body>
</html>
