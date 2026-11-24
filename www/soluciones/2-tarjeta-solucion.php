<?php
// SOLUCIÓN · Nivel 1 · tarjeta (con el bonus del if)
$nombre         = 'Ana Vargas';
$carrera        = 'Ingeniería de Sistemas';
$anioNacimiento = 2004;
$frase          = 'El código que no se prueba, no funciona.';
$color          = 'deepskyblue';

$edad  = (int) date('Y') - $anioNacimiento;
$dias  = (int) ceil((strtotime('2026-11-25') - time()) / 86400);

if ($dias <= 1) {
    $aviso = '🔥 ¡La defensa es mañana (o ya llegó)!';
} else {
    $aviso = "⏳ Faltan $dias días para la defensa de FORJA WEB.";
}
?>
<!DOCTYPE html>
<html lang="es"><head><meta charset="utf-8"><title>Solución tarjeta</title><link rel="stylesheet" href="/assets/fogon.css"></head>
<body><main>
  <div class="migas"><a href="/">🔥 inicio</a> / soluciones / 2-tarjeta-solucion.php</div>
  <div class="tarjeta fuego" style="border-color: <?= $color ?>">
    <p class="enorme"><?= $nombre ?></p>
    <p class="grande" style="font-size:1.4rem"><?= $carrera ?> · <?= $edad ?> años</p>
    <p>«<?= $frase ?>»</p>
    <p><?= $aviso ?></p>
  </div>
</main></body></html>
