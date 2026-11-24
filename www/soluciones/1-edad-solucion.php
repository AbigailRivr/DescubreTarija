<?php
// SOLUCIÓN · Nivel 2 · el caso de los 18 va ANTES del "< 60",
// porque PHP se queda con la PRIMERA condición verdadera.
$edad = 18;
if ($edad < 13) {
    $mensaje = 'Sos un niño: tenés acceso al menú infantil 🍭';
} elseif ($edad < 18) {
    $mensaje = 'Sos adolescente: nada de bebidas para adultos 🧃';
} elseif ($edad == 18) {
    $mensaje = '¡Felices 18! El postre va por la casa 🎂';
} elseif ($edad < 60) {
    $mensaje = 'Sos adulto: acceso completo al menú 🍽️';
} else {
    $mensaje = 'Adulto mayor: ¡20 % de descuento! 🎉';
}
?>
<!DOCTYPE html>
<html lang="es"><head><meta charset="utf-8"><title>Solución edad</title><link rel="stylesheet" href="/assets/fogon.css"></head>
<body><main>
  <div class="migas"><a href="/">🔥 inicio</a> / soluciones / 1-edad-solucion.php</div>
  <div class="tarjeta fuego"><p class="grande" style="font-size:1.6rem"><?= $mensaje ?></p></div>
</main></body></html>
