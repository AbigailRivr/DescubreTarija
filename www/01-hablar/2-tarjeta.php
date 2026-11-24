<?php
// =====================================================================
//  NIVEL 1 · RETO: tu tarjeta de presentación dinámica
//  Completá los TODO. Guardá y recargá para ver el resultado.
// =====================================================================

// TODO 1: poné tus datos
$nombre        = 'Tu nombre';
$carrera       = 'Ingeniería de Sistemas';
$anioNacimiento = 2005;
$frase         = 'Mi frase favorita va acá';

// PHP calcula solo (no hace falta tocar esto… pero leelo)
$anioActual = (int) date('Y');                     // el año de HOY, según el servidor
$edad       = $anioActual - $anioNacimiento;       // una resta

// ¿Cuántos días faltan para la defensa del proyecto (25 de noviembre)?
$defensa    = strtotime('2026-11-25');             // la fecha convertida a segundos
$dias       = (int) ceil(($defensa - time()) / 86400);   // 86400 segundos = 1 día

// TODO 2: creá una variable $color con un color en inglés (por ejemplo 'orange')
// y usala abajo, donde dice TODO 3.
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Mi tarjeta · Nivel 1</title>
  <link rel="stylesheet" href="/assets/fogon.css">
</head>
<body>
<main>
  <div class="migas"><a href="/">🔥 inicio</a> / <a href="/01-hablar/">nivel 1</a> / 2-tarjeta.php</div>
  <div class="kicker">NIVEL 1 · RETO</div>

  <!-- TODO 3: cambiá 'orange' por la variable $color usando < ?= $color ? > -->
  <div class="tarjeta fuego" style="border-color: orange">
    <p class="enorme"><?= $nombre ?></p>
    <p class="grande" style="font-size:1.4rem"><?= $carrera ?> · <?= $edad ?> años</p>
    <p>«<?= $frase ?>»</p>
    <p>⏳ Faltan <b><?= $dias ?></b> días para la defensa de FORJA WEB.</p>
  </div>

  <p class="nota">¿Terminaste? Bonus: si faltan 1 o menos días, que diga «¡Es mañana!» (vas a necesitar el <code>if</code> del nivel 2).</p>
</main>
</body>
</html>
