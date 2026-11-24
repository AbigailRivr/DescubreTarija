<?php
// =====================================================================
//  NIVEL 2 · DECIDIR: if / elseif / else
//  Cambiá $edad y recargá. PHP elige qué camino seguir.
// =====================================================================

$edad = 17;          // 👈 probá con 10, 17, 18, 25, 70

if ($edad < 13) {
    $mensaje = 'Sos un niño: tenés acceso al menú infantil 🍭';
    $chip    = 'cian';
} elseif ($edad < 18) {
    $mensaje = 'Sos adolescente: nada de bebidas para adultos 🧃';
    $chip    = 'fuego';
} elseif ($edad < 60) {
    $mensaje = 'Sos adulto: acceso completo al menú 🍽️';
    $chip    = 'verde';
} else {
    $mensaje = 'Adulto mayor: ¡20 % de descuento! 🎉';
    $chip    = 'verde';
}

// Comparadores:  <  >  <=  >=  == (igual)  != (distinto)
// Unir condiciones:  && (y)   || (o)
$esFinDeSemana = (date('N') >= 6);   // date('N'): 1 = lunes ... 7 = domingo
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Nivel 2 · if</title>
  <link rel="stylesheet" href="/assets/fogon.css">
</head>
<body>
<main>
  <div class="migas"><a href="/">🔥 inicio</a> / <a href="/02-decidir/">nivel 2</a> / 1-edad.php</div>
  <div class="kicker">NIVEL 2 · DECIDIR</div>
  <h1>El portero del restaurante</h1>

  <div class="tarjeta fuego">
    <p>Edad del cliente: <span class="chip <?= $chip ?>"><?= $edad ?> años</span></p>
    <p class="grande" style="font-size:1.6rem"><?= $mensaje ?></p>

    <?php if ($esFinDeSemana): ?>
      <p>🎶 Es fin de semana: hay música en vivo.</p>
    <?php else: ?>
      <p>📅 Es día de semana: menú ejecutivo disponible.</p>
    <?php endif; ?>
  </div>

  <div class="tarjeta">
    <b>🎯 Misión:</b> agregá un caso nuevo: si la edad es <b>exactamente 18</b> (<code>$edad == 18</code>), que diga
    «¡Felices 18! El postre va por la casa 🎂». Ojo: ¿dónde tiene que ir ese <code>elseif</code> para que funcione?
  </div>
</main>
</body>
</html>
